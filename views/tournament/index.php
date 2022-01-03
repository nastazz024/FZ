<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TournamentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Соревнования';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="tournament-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать новый турнир', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'date_start',
            'date_end',
            'description:ntext',
            //'classes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
