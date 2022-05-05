<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MaktabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maktabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maktab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maktab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ishkunlari_uz',
            'ishkunlari_ru',
            'ishkunlari_en',
            'tel',
            //'fax',
            //'manzil_uz',
            //'manzil_ru',
            //'manzil_en',
            //'biriktirilgan_uz',
            //'biriktirilgan_ru',
            //'biriktirilgan_en',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'allmk_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
