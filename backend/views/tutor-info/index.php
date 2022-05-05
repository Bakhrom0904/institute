<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TutorInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tutor Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutor-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tutor Info', ['create'], ['class' => 'btn btn-success']) ?>
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
            'biriktirilgan_uz',
            //'biriktirilgan_ru',
            //'biriktirilgan_en',
            //'tel',
            //'telegram',
            //'email:email',
            //'manzil_uz:ntext',
            //'manzil_ru:ntext',
            //'manzil_en:ntext',
            //'img',
            //'content_uz:ntext',
            //'content_ru:ntext',
            //'content_en:ntext',
            //'tutor_duty_uz:ntext',
            //'tutor_duty_ru:ntext',
            //'tutor_duty_en:ntext',
            //'birik_talaba_royxati_uz:ntext',
            //'birik_talaba_royxati_ru:ntext',
            //'birik_talaba_royxati_en:ntext',
            //'tutor_menu_sub_id',
            //'tutor_faculty_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
