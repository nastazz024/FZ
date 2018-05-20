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
            $ids[] = (int)$item['id'];
        }

        $colors = self::getColors();
        $categories = self::getCategories();


        $products = [];
        if (!empty($ids)) {
            $productModel = self::getProductModel();

            $query = $productModel::find();
            $query->where(['in', 'id', $ids]);

            $products = $query->all();
        }

        return $this->renderPartial('index', [
            'products' => $products,
            'colors' => $colors,
            'categories' => $categories,
            ]
        );
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
        $type = 'shirt';
        $qty = 1;
        $size = 'X';

        $key = $type .  $id . '.' . $size;
        if (!isset($list[$key])) {
            $list[$key] = [
                'type' => $type,
                'id' => $id,
                'qty' => 1,
                'size' => $size,
            ];
        } else {
            $list[$key]['qty']++;
        }

        $session['list'] = $list;

        return $this->actionIndex();
    }
	
}
