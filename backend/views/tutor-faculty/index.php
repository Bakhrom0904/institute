<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TutorFacultySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tutor Faculties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutor-faculty-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tutor Faculty', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'faculty_name_uz',
            'faculty_name_ru',
            'faculty_name_en',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
