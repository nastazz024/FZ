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

<div class="row">

    <div class="col-md-2">
        <?= $this->render('/admin/_menu', [
            'm' => $m,
            'model' => $model,
        ]); ?>

    </div>

    <?php

    if ($model) {
        ?>
    <div class="col-md-10">
        <div class="admin-shop-form- row">
            <?= $this->render('/admin/_form', [
                'm' => $m,
                'model' => $model,
            ]); ?>
        </div>
<hr/>
        <div class="admin-shop-list- row">
            <?= $this->render('/admin/_list', [
                'm' => $m,
                'model' => $model,
            ]); ?>
        </div>
     </div>
    <?php
    } ?>
</div>
