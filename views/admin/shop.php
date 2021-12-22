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
        ?>
        <div class="admin-shop-form">
            <?= $this->render('/admin/_form', [
                'm' => $m,
                'model' => $model,
            ]); ?>
        </div>

        <div class="admin-shop-list">
            <?= $this->render('/admin/_list', [
                'm' => $m,
                'model' => $model,
            ]); ?>
        </div>
    <?php
    } ?>
</div>
