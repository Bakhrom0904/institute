<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InstitutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instituts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institut-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Institut', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'ins_menu_sub_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
