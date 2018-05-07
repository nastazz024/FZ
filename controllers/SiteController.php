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

	
	
	
	 public function actionProducts()
    {
		
		
		$productModel = \yii::$app->get('product');

        $query = $productModel::find();

        $products = $query->all();

        return $this->render('products', ['products' => $products]);
		
		print_r(Yii::$app->request->getBodyParam('tab'));

    }
	
	
	
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
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

    public function actionCatalog()
    {
        $request = \yii::$app->request;

        $colors = self::getColors();
        $categories = self::getCategories();

        $productModel = self::getProductModel();

        $query = $productModel::find();

        $rColors = $this->sanitizeIds($request->post('colors'));
        if (!empty($rColors)) {
            $query->where(['in', 'color', $rColors]);
        }

        $products = $query->all();

        return $this->renderPartial('_products', ['products' => $products, 'colors' => $colors, 'categories' => $categories]);
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
