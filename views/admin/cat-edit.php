<?php

$m = \yii::$app->get('request')->get('m');

/** @var \app\components\ManageableIntegface|\yii\db\ActiveRecord|null $model */

$model = null;
try {
    $model = \yii::$app->get($m);
    if (!($model instanceof \app\components\ManageableIntegface)) {
        throw new \Exception('nope');
    }

} catch (\Exception $e) {
//    throw $e;
}

?>

<div class="admin-shop-container">

    <div class="admin-shop-modules">
        <?= $this->render('/admin/_menu', [
            'm' => $m,
            'model' => $model,
        ]); ?>

    </div>

    <?php

    if ($model) {
        $id = \yii::$app->get('request')->get('id');
        $item = null;
        if ($id) {
            $item = $model->findOne($id);
        } else {
            $item = $model;
        }

        if ($item) { ?>
            <div class="admin-shop-content">
                <?= $this->render('/admin/_content', [
                    'm' => $m,
                    'model' => $model,
                    'item' => $item,
                ]); ?>
            </div>
            <?php
        } ?>
    <?php } ?>
</div>
