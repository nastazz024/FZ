<?php

namespace app\controllers;

use app\components\ComponentsTrait;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class UserController extends Controller
{

    use ComponentsTrait;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            /*'access' => [
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],*/
        ];
    }

	public function actionLogin()
    {
        $this->layout = 'home';

        $identity = Yii::$app->user->identity; // user
        if ($identity) {
            $this->redirect('/');
        }

        $request = \yii::$app->request;
        if (!$request->isPost) {
            return $this->render('login');
        }


        $model = self::getUserModel();

        $identity = $model->findIdentityByLogin($request->post('username'));
        if ($identity && $identity->validateAuthKey($request->post('password'))) {
            Yii::$app->user->login($identity);
            $this->redirect('/');
        }

        return $this->render('login', [
            'username' => $request->post('username'),
            'message' => 'Неверный логин или пароль',
        ]);
    }


	public function actionLogout()
    {
        Yii::$app->user->logout(true);
        $this->redirect('/user/login');
    }



	public function actionProfile()
    {
        $this->layout = 'home';

        /** @var User $identity */
        $identity = Yii::$app->user->identity;
        if (!$identity) {
            $this->redirect('/');
        }

        $message = '';
        $errors = [];


        $request = \yii::$app->request;
        if ($request->isPost) {
            switch ($request->post('act')) {
                case 'profile':
                    $identity->setAttributes($request->post());
                    if (!$identity->validate()) {
                        $errors = $identity->errors;

                    } else {
                        $identity->save();
                        $this->redirect('/user/profile');
                    }
                    break;

                case 'password':
                    if (!$identity->validateAuthKey($request->post('current'))) {
                        $errors['current'] = ['Неверный пароль'];
                    } else {
                        if (empty($request->post('new')) || empty($request->post('repeat'))
                            || $request->post('new') != $request->post('repeat')) {
                            $errors['repeat'] = ['Пароли не совпадают'];
                        } else {
                            $identity->password = $identity->hashAuthKey($request->post('new'));
                            $identity->save();
                            $this->redirect('/user/profile');
                        }
                    }
            }
        }



        return $this->render('profile', [
            'user' => $identity,
            'message' => $message,
            'errors' => $errors,
        ]);
    }


}
