<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TezHavolaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tez Havolas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tez-havola-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tez Havola', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'tez_men__sub_id',
            //'opisaniya_uz',
            //'opisaniya_ru',
            //'opisaniya_en',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
