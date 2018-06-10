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
        $shoesIds = [];
        $racket_accsIds = [];
        $accsIds = [];
        $jacketIds = [];
        $bagIds = [];
        $shuttleIds = [];
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

                case 'racket_accs':
                    $racket_accsIds[] = (int)$item['id'];
                    break;

                case 'accs':
                    $accsIds[] = (int)$item['id'];
                    break;

                case 'shuttle':
                    $shuttleIds[] = (int)$item['id'];
                    break;

                case 'bag':
                    $bagIds[] = (int)$item['id'];
                    break;

                case 'jacket':
                    $jacketIds[] = (int)$item['id'];
                    break;

                case 'shoes':
                    $shoesIds[] = (int)$item['id'];
                    break;
            }
        }

        $colors = self::getShirtColors();
        $categories = self::getShirtCategories();
        $categorie = self::getShortCategories();

        $shirts = $this->readObjects($shirtIds, self::getShirtModel());
        $rackets = $this->readObjects($racketIds, self::getRacketModel());
        $rackets_accs = $this->readObjects($racket_accsIds, self::getRacket_accsModel());
        $accss = $this->readObjects($accsIds, self::getAccsModel());
        $shorts = $this->readObjects($shortIds, self::getShortModel());
        $shuttles = $this->readObjects($shuttleIds, self::getShuttleModel());
        $jackets = $this->readObjects($jacketIds, self::getJacketModel());
        $bags = $this->readObjects($bagIds, self::getBagModel());
        $shoeses = $this->readObjects($shoesIds, self::getShoesModel());

        //echo '<pre>'; print_r($session['list']); exit;

        return $this->renderPartial('index', [
                'items' => $session['list'],
                'shirts' => $shirts,
                'rackets' => $rackets,
                'rackets_accs' => $rackets_accs,
                'accss' => $accss,
                'jackets' => $jackets,
                'shorts' => $shorts,
                'colors' => $colors,
                'shuttles' => $shuttles,
                'bags' => $bags,
                'shoeses' => $shoeses,
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
        $racket_accsIds = [];
        $accsIds = [];
        $shoesIds = [];
        $shuttleIds = [];
        $bagIds = [];
        $jacketIds = [];
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

                case 'racket_accs':
                    $racket_accsIds[] = (int)$item['id'];
                    break;

                case 'accs':
                    $accsIds[] = (int)$item['id'];
                    break;

                case 'shoes':
                    $shoesIds[] = (int)$item['id'];
                    break;
                case 'bag':
                    $bagIds[] = (int)$item['id'];
                    break;

                case 'shuttle':
                    $shuttleIds[] = (int)$item['id'];
                    break;
                case 'jacket':
                    $jacketIds[] = (int)$item['id'];
                    break;
            }
        }

        $colors = self::getShirtColors();
        $categories = self::getShirtCategories();
        $sizes = self::getShirtSizes();
        $categorie = self::getShortCategories();

        $shirts = $this->readObjects($shirtIds, self::getShirtModel());
        $shorts = $this->readObjects($shortIds, self::getShortModel());
        $rackets = $this->readObjects($racketIds, self::getRacketModel());
        $rackets_accs = $this->readObjects($racket_accsIds, self::getRacket_accsModel());
        $accss = $this->readObjects($accsIds, self::getAccsModel());
        $shoeses = $this->readObjects($shoesIds, self::getShoesModel());
        $jackets = $this->readObjects($jacketIds, self::getJacketModel());
        $bags = $this->readObjects($bagIds, self::getBagModel());
        $shuttles = $this->readObjects($shuttleIds, self::getShuttleModel());
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
                'rackets_accs' => $rackets_accs,
                'accss' => $accss,
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
            case 'short':
            case 'shoes':
            case 'jacket':
                $size = $request->post('size');
                if (empty($size)) {
                    // just render cart without processing bad item
                    return $this->actionIndex();
                }
                $key = $type . '.' . $id . '.' . $size;
                break;

            case 'racket':
            case 'racket_accs':
            case 'accs':
            case 'bag':
            case 'shuttle':
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
            case 'short':
            case 'jacket':
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
