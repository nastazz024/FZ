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

class SiteController extends Controller
{
    use ComponentsTrait;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
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
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [/*
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],*/
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'catalog';
        return $this->render('index');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionShirt()
    {
        $request = \yii::$app->request;

        $colors = self::getColors();
        
        $categories = self::getCategories();

        $productModel = self::getShirtModel();

        $query = $productModel::find();
        $query->where('1=1');

        $rColors = $this->sanitizeIds($request->post('colors'));
        if (!empty($rColors)) {
            $query->andWhere(['in', 'color', $rColors]);
        }

        $rSize = $this->sanitizeIds($request->post('size'));
        if (!empty($rSize)) {
            // $query->andWhere(['in', 'size', $rSize]);
            $query->join('inner join', 'shirt_count', 'shirt.id = shirt_count.shirt_id');
            $query->andWhere(['in', 'shirt_count.shirt_size_id', $rSize]);
            $query->andWhere('shirt_count.count > 0');
        }



        $rCost = $this->sanitizeIds($request->post('cost'));
        if (!empty($rCost['min']) || !empty($rCost['max'])) {
            if (!isset($rCost['min'])) {
                $rCost['min'] = 0;
            }
            if (!isset($rCost['max'])) {
                $rCost['max'] = PHP_INT_MAX;
            }
            $query->andWhere(['between', 'price', $rCost['min'], $rCost['max']]);
        }


        $sort = [];
        $rSort = $request->post('sort');
        if ($rSort && is_array($rSort) && !empty($rSort['field']) && isset($rSort['dir'])) {
            /// todo check values
            // format "<field> <asc|desc>"
            $sort[$rSort['field']] = (strtolower($rSort['dir']) == 'asc' ? SORT_ASC : SORT_DESC);
        }
        if (!isset($sort['name'])) {
            $sort['name'] = 'asc';
        }
        $query->orderby($sort);

        // print_r($query->createCommand()->getRawSql());  

        $products = $query->all();
        
               
        return $this->renderPartial('_products', [
            'products' => $products, 
            'colors' => $colors, 
            'categories' => $categories,
            'view' => $request->post('view', 'grid'),
        ]);
    }

    /**
     * @param array $ids
     * @return array
     */
    private function sanitizeIds($ids)
    {
        if (!is_array($ids)) {
            return [];
        }

        array_walk($ids, function(&$v) {
            $v = (int)$v;
        });

        $ids = array_filter($ids);

        return $ids;
    }
}
