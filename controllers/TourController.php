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

class TourController extends Controller
{
    use ComponentsTrait;


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
//        $request = \yii::$app->request;
        $this->layout = 'home';
        return $this->render('index');
    }


}
