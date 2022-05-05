<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SliderOnIconSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slider On Icons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-on-icon-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Slider On Icon', ['create'], ['class' => 'btn btn-success']) ?>
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
            'img',
            //'link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
