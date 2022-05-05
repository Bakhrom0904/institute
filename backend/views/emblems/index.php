<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmblemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emblems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emblems-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emblems', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'img',
            'height',
            'width',
            'name',
            //'link_type',
            //'link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
