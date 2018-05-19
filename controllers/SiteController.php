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

	 public function actionContacts()
    {
        return $this->render('contacts');
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

        $productModel = self::getProductModel();

        $query = $productModel::find();
        $query->where('1=1');

        $rColors = $this->sanitizeIds($request->post('colors'));
        if (!empty($rColors)) {
            $query->andWhere(['in', 'color', $rColors]);
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
            $sort[$rSort['field']] = $rSort['dir'];
        }
        $sort['name'] = 'asc';
        $query->orderby($sort);

        $products = $query->all();
        //print_r($query->createCommand()->getRawSql());         
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
