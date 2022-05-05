<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teacher', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'rank_uz',
            //'rank_ru',
            //'rank_en',
            //'telegram',
            //'facebook',
            //'instagram',
            //'email:email',
            //'phone',
            //'birth',
            //'address_uz',
            //'address_ru',
            //'address_en',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'img',
            //'staff_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
