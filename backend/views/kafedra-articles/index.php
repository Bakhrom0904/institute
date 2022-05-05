<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KafedraArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kafedra Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kafedra-articles-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kafedra Articles', ['create'], ['class' => 'btn btn-success']) ?>
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
            'article_degree_uz',
            //'article_degree_ru',
            //'article_degree_en',
            //'date',
            //'art_kafedra_oqituvchilari_id',
            //'number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
