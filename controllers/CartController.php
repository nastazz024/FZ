<?php

namespace app\controllers;

use app\components\ComponentsTrait;
use Yii;
use yii\db\ActiveRecord;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Products;

class CartController extends Controller
{
    use ComponentsTrait;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            /* 'access' => [
                 'class' => AccessControl::className(),
                 'only' => ['logout'],
                 'rules' => [
                     [
                         'actions' => ['logout'],
                         'allow' => true,
                         'roles' => ['@'],
                     ],
                 ],
             ],
             'verbs' => [
                 'class' => VerbFilter::className(),
                 'actions' => [
                     'logout' => ['post'],
                 ],
             ],*/
        ];
    }

    public function actionIndex()
    {
        $session = \yii::$app->session;
        if (!$session->isActive) {
            $session->open();
        }

        if (!isset($session['list'])) {
            $session['list'] = [];
        }

        $shirtIds = [];
        $racketIds = [];
        $shortIds = [];
        foreach ($session['list'] as $item) {
            switch ($item['type']) {
                case 'shirt':
                    $shirtIds[] = (int)$item['id'];
                    break;

                case 'short':
                    $shortIds[] = (int)$item['id'];
                    break;

                case 'racket':
                    $racketIds[] = (int)$item['id'];
                    break;
            }
        }

        $colors = self::getColors();
        $categories = self::getShirtCategories();
        $categorie = self::getShortCategories();

        $shirts = $this->readObjects($shirtIds, self::getShirtModel());
        $rackets = $this->readObjects($racketIds, self::getRacketModel());
        $shorts = $this->readObjects($shortIds, self::getShortModel());

//        echo '<pre>'; print_r($session['list']); exit;

        return $this->renderPartial('index', [
                'items' => $session['list'],
                'shirts' => $shirts,
                'rackets' => $rackets,
                'shorts' => $shorts,
                'colors' => $colors,
                'categories' => $categories,
                'sizes' => self::getShirtSizes(), // remane to shirtSizes
                'jacketSizes' => self::getJacketSizes(),
            ]
        );
    }


    public function actionConfirm()
    {
        $session = \yii::$app->session;
        if (!$session->isActive) {
            $session->open();
        }

        if (!isset($session['list'])) {
            $session['list'] = [];
        }

        $shirtIds = [];
        $shortIds = [];
        $racketIds = [];
        $shoesIds = [];
        foreach ($session['list'] as $item) {
            switch ($item['type']) {
                case 'shirt':
                $shirtIds[] = (int)$item['id'];
                break;

                case 'short':
                    $shortIds[] = (int)$item['id'];
                    break;

                case 'racket':
                    $racketIds[] = (int)$item['id'];
                    break;

                case 'shoes':
                    $shoesIds[] = (int)$item['id'];
                    break;
            }
        }

        $colors = self::getColors();
        $categories = self::getShirtCategories();
        $sizes = self::getShirtSizes();
        $categorie = self::getShortCategories();

        $shirts = $this->readObjects($shirtIds, self::getShirtModel());
        $shorts = $this->readObjects($shortIds, self::getShortModel());
        $rackets = $this->readObjects($racketIds, self::getRacketModel());
        $shoeses = $this->readObjects($shoesIds, self::getShoesModel());
        $jackets = $this->readObjects($jacketIds, self::getJacketModel());
//        echo '<pre>'; print_r($session['list']); exit;

        $this->layout = 'catalog';

        return $this->render('confirm', [
                'items' => $session['list'],
                'shirts' => $shirts,
                'shorts' => $shorts,
                'bags' => $bags,
                'jackets' => $jackets,
                'shuttles' => $shuttles,
                'rackets' => $rackets,
                'shoeses' => $shoeses,
                'colors' => $colors,
                'categories' => $categories,
                'sizes' => $sizes,
            ]
        );
    }

    public function actionComplete()
    {
            /// todo send email
    }

    public function actionClear()
    {
        $session = \yii::$app->session;
        if (!$session->isActive) {
            $session->open();
        }

        $session['list'] = [];

        return $this->actionIndex();
    }


    public function actionAdd()
    {
        $request = \yii::$app->request;

        $session = \yii::$app->session;
        if (!$session->isActive) {
            $session->open();
        }

        if (!isset($session['list'])) {
            $session['list'] = [];
        }
        $list = $session['list'];

        $id = $request->post('id');

        // do not add unknown item
        if (!$id) {
            return $this->actionIndex();
        }

        $type = $request->post('type');
        $qty = $request->post('qty', 1);

        switch ($type) {
            case 'shirt':
                $size =  $size = $request->post('size');
                $key = $type . '.' . $id . '.' . $size;
                break;

            default:
                $key = $type . '.' . $id;
        }

        switch ($type) {
            case 'short':
                $size =  $size = $request->post('size');
                $key = $type . '.' . $id . '.' . $size;
                break;

            default:
                $key = $type . '.' . $id;
        }

        switch ($type) {
            case 'shoes':
                $size =  $size = $request->post('size');
                $key = $type . '.' . $id . '.' . $size;
                break;

            default:
                $key = $type . '.' . $id;
        }


        if (!isset($list[$key])) {
            $list[$key] = [
                'type' => $type,
                'id' => $id,
                'qty' => $qty,
            ];
        } else {
            $list[$key]['qty'] += $qty;
        }

        switch ($type) {
            case 'shirt':
                $list[$key]['size'] = $size;
                break;
        }

        switch ($type) {
            case 'short':
                $list[$key]['size'] = $size;
                break;
        }

        switch ($type) {
            case 'jacket':
                $list[$key]['size'] = $size;
                break;
        }

        switch ($type) {
            case 'shoes':
                $list[$key]['size'] = $size;
                break;
        }


        $session['list'] = $list;

        return $this->actionIndex();
    }

    public function actionDel()
    {
        $request = \yii::$app->request;

        $session = \yii::$app->session;
        if (!$session->isActive) {
            $session->open();
        }

        if (!isset($session['list'])) {
            $session['list'] = [];
        }

        $list = $session['list'];

        unset($list[$request->post('key')]);

        $session['list'] = $list;

        return $this->actionIndex();
    }

    /**
     * @param $ids
     * @param ActiveRecord $model
     * @return array
     */
    public function readObjects($ids, ActiveRecord $model)
    {
        $items = [];
        if (!empty($ids)) {
            $query = $model::find();
            $query->where(['in', 'id', $ids]);

            foreach ($query->all() as $item) {
                $items[$item->id] = $item;
            }
        }
        return $items;
    }
}
