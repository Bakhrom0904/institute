<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MaktablarInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maktablar Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maktablar-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maktablar Info', ['create'], ['class' => 'btn btn-success']) ?>
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
            'img',
            //'kimga_biriktirilgan_uz:ntext',
            //'kimga_biriktirilgan_ru:ntext',
            //'kimga_biriktirilgan_en:ntext',
            //'tel',
            //'email:email',
            //'fax',
            //'manzil_uz:ntext',
            //'manzil_ru:ntext',
            //'manzil_en:ntext',
            //'sektor_uz',
            //'sektor_ru',
            //'sektor_en',
            //'maktab_tarixi_uz:ntext',
            //'maktab_tarixi_ru:ntext',
            //'maktab_tarixi_en:ntext',
            //'maktab_teacher_uz:ntext',
            //'maktab_teacher_ru:ntext',
            //'maktab_teacher_en:ntext',
            //'maktab_pupil_uz:ntext',
            //'maktab_pupil_ru:ntext',
            //'maktab_pupil_en:ntext',
            //'maktab_pasporti_uz:ntext',
            //'maktab_togaraklar_uz:ntext',
            //'maktab_togaraklar_ru:ntext',
            //'maktab_togaraklar_en',
            //'maktab_pasporti_ru:ntext',
            //'maktab_pasporti_en:ntext',
            //'maktab_info_menu_sub_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
