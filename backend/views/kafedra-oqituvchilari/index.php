<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KafedraOqituvchilariSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kafedra Oqituvchilaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kafedra-oqituvchilari-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kafedra Oqituvchilari', ['create'], ['class' => 'btn btn-success']) ?>
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
            'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'img',
            //'lavozimi_uz',
            //'lavozimi_ru',
            //'lavozimi_en',
            //'darajasi_uz',
            //'darajasi_ru',
            //'darajasi_en',
            //'telegram',
            //'email:email',
            //'tel',
            //'manzil_uz',
            //'manzil_ru',
            //'manzil_en',
            //'qabul_uz',
            //'qabul_ru',
            //'qabul_en',
            //'comm_kafedra_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
