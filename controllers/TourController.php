<?php

namespace app\controllers;

use app\components\ComponentsTrait;
use app\models\Tournament;
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
        $request = \yii::$app->request;
        $this->layout = 'home';

        $dates = $request->get('d');
        if ($dates) {
            $dates = explode(' - ', $dates);
        }
        return $this->render('index', [
            'dateFrom' => $dates[0] ?? false,
            'dateTo' => $dates[1] ?? false,
        ]);
    }

    public function actionView($id)
    {
        $request = \yii::$app->request;
        $this->layout = 'home';


        return $this->render('view', [
            'tour' => Tournament::findOne($id),
            'currClass' => $request->get('cl'),
            'currType' => $request->get('t'),
        ]);
    }

}
