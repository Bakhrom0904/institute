<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SupportersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supporters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supporters-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Supporters', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'img',
            'link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
