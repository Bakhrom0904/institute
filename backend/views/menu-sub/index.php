<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuSubSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Subs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-sub-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Menu Sub', ['create'], ['class' => 'btn btn-success']) ?>
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
            'menu_title_id',
            //'link',
            //'link_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
