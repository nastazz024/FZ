<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tournament */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Соревнования', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

echo \yii\widgets\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    'homeLink' => false,
]);

?>
<div class="tournament-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'date_start',
            'date_end',
            'description:ntext',
            'classes',
        ],
    ]) ?>

    <div class="row h3">

        <div class="col-md-1">
            <a href="/admin/tournament/players?tid=<?= $model->id ?>">Заявки</a>
        </div>
        <div class="col-md-1">
            <a href="/admin/tournament/draws?tid=<?= $model->id ?>">Игры</a>
        </div>
    </div>
</div>
