<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FakultetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fakultets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakultet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fakultet', ['create'], ['class' => 'btn btn-success']) ?>
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
            'faculty_uz',
            //'faculty_ru',
            //'faculty_en',
            //'rank_uz',
            //'rank_ru',
            //'rank_en',
            //'img',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'qabul_date_uz',
            //'qabul_date_ru',
            //'qabul_date_en',
            //'tel',
            //'fax',
            //'email:email',
            //'telegram',
            //'address_uz',
            //'address_ru',
            //'address_en',
            //'staff_uz',
            //'staff_ru',
            //'staff_en',
            //'menu_sub_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
