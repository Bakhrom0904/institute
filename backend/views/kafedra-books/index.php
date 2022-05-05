<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KafedraBooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kafedra Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kafedra-books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kafedra Books', ['create'], ['class' => 'btn btn-success']) ?>
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
            'chop_etilgan_joy_uz',
            //'chop_etilgan_joy_ru',
            //'chop_etilgan_joy_en',
            //'date',
            //'book_kafedra_oqituvchilari_id',
            //'number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
