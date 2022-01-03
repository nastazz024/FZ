<?php

namespace app\controllers;

use app\components\ComponentsTrait;
use app\models\UploadForm;
use Yii;
use yii\db\ActiveRecord;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


class AdminController extends Controller
{
    use ComponentsTrait;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => null, // all
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            $user = \Yii::$app->getUser()->identity;
                            if (!$user) {
                                return false;
                            }
                            return $user->is_admin > 0;
                        }
                    ],
                ],
            ],
        ];
    }

    public function init()
    {
        parent::init();
        $this->layout = 'admin';
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShop()
    {
        return $this->render('shop');
    }

    public function actionCatEdit()
    {
        $request = \yii::$app->request;

        if ($request->getIsPost()) {
            $data = $request->post();
            if (empty($data['m'])) {
                $this->redirect('/admin/?m='  ($data['m'] ?? ''));
                return;
            }

            /** @var ActiveRecord $model */
            $model = null;
            try {
                $model = \yii::$app->get($data['m'] ?? 'nope');
                if (!($model instanceof \app\components\ManageableIntegface)) {
                    throw new \Exception('nope');
                }
            } catch (\Exception $e) {
//    throw $e;
            }

            if ($model) {
                $item = null;
                try {
                    if (!empty($data['id'])) {
                        $item = $model->findOne((int)($data['id'] ?? 0));
                    } else {
                        $item = $model;
                    }
                } catch (\Exception $e) {
                    //
                }

                if ($item) {
                    if (($data['act'] ?? false) == 'del') {
                        $item->delete();
                        $this->redirect('/admin/?m='  ($data['m'] ?? ''));
                        return;
                    }


                    $item->setAttributes($data, false);
                    if ($item->save()) {
                        if ($imgField = $model->hasImageField()) {
                            $imgModel = new UploadForm();
                            $imgModel->imageFile = UploadedFile::getInstance($imgModel, 'imageFile');
                            $name = $data['m'] . '-' . $item->id;
                            if ($imgModel->imageFile) {
                                @unlink($imgModel->getDir() . $item->{$imgField});
                                if ($imgModel->upload($name)) {
                                    $item->setAttribute($imgField, $imgModel->getName($data['m'] . '-' . $item->id));
                                    $item->save();
                                }
                            }
                        }
                        $data['id'] = $item->id;


                        //counts
                        if (!empty($data['counts'] ?? []) && $cntOpts = $item->getCountOptions()) {
                            $cntListModel = key($cntOpts['list']['model']);
                            /** @var ActiveRecord $cntListModel */
                            $cntListModel = \Yii::$app->get($cntListModel);

                            $cntModel = key($cntOpts['model']);
                            /** @var ActiveRecord $cntModel */
                            $cntModel = \Yii::$app->get($cntModel);

                            foreach ($data['counts'] as $cntListId => $cnt) {
                                if ($cntListModel->findOne($cntListId)) {
                                    if ($cntObj = $cntModel->findOne([
                                        current($cntOpts['model'])[0] => $item->id,
                                        current($cntOpts['model'])[1] => $cntListId
                                    ])) {
                                    } else {
                                        $cntObj = new $cntModel();
                                        $cntObj->{current($cntOpts['model'])[0]} = $item->id;
                                        $cntObj->{current($cntOpts['model'])[1]} = $cntListId;
                                    }
                                    $cntObj->count = $cnt;
                                    $cntObj->save();
                                }
                            }
                        }
                    }
                }
            }

            $this->redirect('/admin/cat-edit?m=' . $data['m'] . '&id=' . $data['id']);
            return;
        }


        return $this->render('cat-edit');
    }

    public function actionTour()
    {
        return $this->render('tour');
    }


}
