<?php

namespace app\controllers;

use app\components\ComponentsTrait;
use Yii;
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

        $ids = [];

        foreach ($session['list'] as $item) {
            // todo allow not only shirt items
            $ids[] = (int)$item['id'];
        }

        $colors = self::getColors();
        $categories = self::getCategories();
        $sizes = self::getSizes();

        $shirts = [];
        if (!empty($ids)) {
            $shirtModel = self::getShirtModel();

            $query = $shirtModel::find();
            $query->where(['in', 'id', $ids]);

            foreach ($query->all() as $item) {
                $shirts[$item->id] = $item;
            }
        }

//        echo '<pre>'; print_r($session['list']); exit;

        return $this->renderPartial('index', [
                'items' => $session['list'],
                'shirts' => $shirts,
                'colors' => $colors,
                'categories' => $categories,
                'sizes' => $sizes,
            ]
        );
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

        $type = 'shirt'; // todo
        $qty = 1; // todo
        $size = 1; // todo

        $key = $type . $id . '.' . $size;
        if (!isset($list[$key])) {
            $list[$key] = [
                'type' => $type,
                'id' => $id,
                'qty' => $qty,
                'size' => $size,
            ];
        } else {
            $list[$key]['qty'] += $qty;
        }

        $session['list'] = $list;

        return $this->actionIndex();
    }

    // todo delete action
    // $list = $session['list'];   $key = $type .  $id . '.' . $size;   unset($list[$key]);
    // $session['list'] = $list;
    //  return $this->actionIndex();
    /*public function actionDel()
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

        $id = $request->post('id')
        $type = 'shirt'; // todo
        $qty = 1; // todo
        $size = 1; // todo

        $key = $type . $id . $qty . $size;
        unset($list[$key]);
        $list[$key] = [
            'type' => $type,
            'id' => $id,
            'qty' => $qty,
            'size' => $size];

        $session['list'] = $list;

        return $this->actionIndex();
    }*/
}
