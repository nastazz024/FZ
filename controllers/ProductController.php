<?php

namespace app\controllers;

use app\components\ComponentsTrait;
use app\models\AbstractCategory;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class ProductController extends Controller
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

    public function actionShirts()
    {
        $request = \yii::$app->request;

        $colors = self::getShirtColors();

        $categories = self::getShirtCategories();

        $shirtModel = self::getShirtModel();

        $query = $shirtModel::find();
        $query->where('1=1');

        $kind = AbstractCategory::getCategoryId($request->post('kind'));
        if ($kind) {
            $query->andWhere('category = ' . $kind);
        }


        $rColors = $this->sanitizeIds($request->post('colors'));
        if (!empty($rColors)) {
            $query->andWhere(['in', 'color', $rColors]);
        }

        $rSize = $this->sanitizeIds($request->post('size'));
        $query->join('inner join', 'shirt_count', 'shirt.id = shirt_count.shirt_id');
        $query->andWhere('shirt_count.count > 0');
        if (!empty($rSize)) {
            $query->andWhere(['in', 'shirt_count.shirt_size_id', $rSize]);
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

        // todo add filter by category  ("cat" parameter)


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


        return $this->renderAjax('//product/_shirts', [
            'shirts' => $products,
            'colors' => $colors,
            'categories' => $categories,
            'view' => $request->post('view', 'grid'),
        ]);
    }



    public function actionShirt()
    {
        $request = \yii::$app->request;

        $colors = self::getShirtColors();

        $categories = self::getShirtCategories();

        $shirtModel = self::getShirtModel();

        $shirt = $shirtModel::findOne($request->get('id'));

        $this->layout = 'catalog';
        return $this->render('//product/shirt-details', [
            'shirt' => $shirt,
            'colors' => $colors,
            'categories' => $categories,
        ]);
    }


    public function actionProductDetails()
    {
        $request = \yii::$app->request;

        $colors = null;
        $categories = null;
        $sizes = null;
        switch ($request->get('type')) {
            case 'shirt':
                $model = self::getShirtModel();
                $item = $model::findOne($request->get('id'));
                $sizes = $item->getSizes();
                $colors = self::getShirtColors();
                $categories = self::getShirtCategories();
                break;

            case 'short':
                break;

            case 'jacket':
                break;

            case 'shoes':
                break;

            case 'shuttle':
                break;

            case 'bag':
                break;

            case 'racket':
                $model = self::getRacketModel();
                $item = $model::findOne($request->get('id'));
                break;
        }



        $this->layout = 'catalog';
        return $this->render('//product/product-details', [
            'item' => $item,
            'colors' => $colors,
            'categories' => $categories,
            'sizes' => $sizes,
        ]);
    }



    public function actionShorts()
    {
        $request = \yii::$app->request;

        $colors = self::getShirtColors();

        $categories = self::getShortCategories();

        $shortModel = self::getShortModel();

        $query = $shortModel::find();
        $query->where('1=1');

        $kind = AbstractCategory::getCategoryId($request->post('kind'));
        if ($kind) {
            $query->andWhere('category = ' . $kind);
        }


        $rColors = $this->sanitizeIds($request->post('colors'));
        if (!empty($rColors)) {
            $query->andWhere(['in', 'color', $rColors]);
        }

        $rSize = $this->sanitizeIds($request->post('size'));
        $query->join('inner join', 'short_count', 'short.id = short_count.short_id');
        $query->andWhere('short_count.count > 0');
        if (!empty($rSize)) {
            $query->andWhere(['in', 'short_count.short_size_id', $rSize]);
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

        // todo add filter by category  ("cat" parameter)


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


        return $this->renderAjax('//product/_shorts', [
            'shorts' => $products,
            'colors' => $colors,
            'categories' => $categories,
            'view' => $request->post('view', 'grid'),
        ]);

    }



    public function actionRackets()
    {
        $request = \yii::$app->request;

        $racketModel = self::getRacketModel();

        $query = $racketModel::find();
        $query->where('1=1');


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


        return $this->renderAjax('//product/_rackets', [
            'rackets' => $products,
            'view' => $request->post('view', 'grid'),
        ]);
    }


    public function actionBags()
    {
        $request = \yii::$app->request;

        $bagModel = self::getBagModel();

        $query = $bagModel::find();
        $query->where('1=1');


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


        return $this->renderAjax('//product/_bags', [
            'bags' => $products,
            'view' => $request->post('view', 'grid'),
        ]);
    }

    public function actionShoeses()
    {
        $request = \yii::$app->request;
        $shoesModel = self::getShoesModel();
        $categories = self::getShoesCategories();
        $query = $shoesModel::find();
        $query->where('1=1');

        $kind = AbstractCategory::getCategoryId($request->post('kind'));
        if ($kind) {
            $query->andWhere('category = ' . $kind);
        }


        /*

        TODO finish this block
        $rSize = $this->sanitizeIds($request->post('size'));
        $query->join('inner join', 'shirt_count', 'shirt.id = shirt_count.shirt_id');
        $query->andWhere('shirt_count.count > 0');
        if (!empty($rSize)) {
            $query->andWhere(['in', 'shirt_count.shirt_size_id', $rSize]);
        }*/

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
        return $this->renderAjax('//product/_shoeses', [
            'shoeses' => $products,
            'categories' => $categories,
            'view' => $request->post('view', 'grid'),
        ]);
    }

    public function actionShuttles()
    {
        $request = \yii::$app->request;

        $shuttleModel = self::getShuttleModel();

        $query = $shuttleModel::find();
        $query->where('1=1');

        // todo add filter

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


        return $this->renderAjax('//product/_shuttles', [
            'shuttles' => $products,
            'view' => $request->post('view', 'grid'),
        ]);
    }


    public function actionJackets()
    {
        $request = \yii::$app->request;

        $colors = self::getShirtColors();

        $categories = self::getJacketCategories();

        $jacketModel = self::getJacketModel();

        $query = $jacketModel::find();
        $query->where('1=1');

        $kind = AbstractCategory::getCategoryId($request->post('kind'));
        if ($kind) {
            $query->andWhere('category = ' . $kind);
        }

        $rColors = $this->sanitizeIds($request->post('colors'));
        if (!empty($rColors)) {
            $query->andWhere(['in', 'color', $rColors]);
        }

        $rSize = $this->sanitizeIds($request->post('size'));
        $query->join('inner join', 'jacket_count', 'jacket.id = jacket_count.jacket_id');
        $query->andWhere('jacket_count.count > 0');
        if (!empty($rSize)) {
            $query->andWhere(['in', 'jacket_count.jacket_size_id', $rSize]);
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

        // todo add filter by category  ("cat" parameter)


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


        return $this->renderAjax('//product/_jackets', [
            'jackets' => $products,
            'colors' => $colors,
            'categories' => $categories,
            'view' => $request->post('view', 'grid'),
        ]);
    }

}
