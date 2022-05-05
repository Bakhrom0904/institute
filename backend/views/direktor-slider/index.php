<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DirektorSliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Direktor Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direktor-slider-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Direktor Slider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_uz',
            'name_ru',
            'name_en',
            'content_uz',
            //'content_ru',
            //'content_en',
            //'img',
            //'field_uz',
            //'field_ru',
            //'field_en',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
