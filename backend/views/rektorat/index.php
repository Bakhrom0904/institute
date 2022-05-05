<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RektoratSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rektorats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rektorat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rektorat', ['create'], ['class' => 'btn btn-success']) ?>
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
            'lavozim_uz',
            //'lavozim_ru',
            //'lavozim_en',
            //'img',
            //'qabul_vaqti_uz',
            //'qabul_vaqti_ru',
            //'qabul_vaqti_en',
            //'tel',
            //'fax',
            //'email:email',
            //'telegram',
            //'manzil_uz',
            //'manzil_ru',
            //'manzil_en',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'rek_menu_sub_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
