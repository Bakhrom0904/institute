<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VideoGallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Video Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Video Gallery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_uz:ntext',
            'name_ru:ntext',
            'name_en:ntext',
            'type_uz',
            //'type_ru',
            //'type_en',
            //'img',
            //'link:ntext',
            //'video_duration',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
