<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FakultetStaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fakultet Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakultet-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fakultet Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'staff_name_uz',
            'staff_name_ru',
            'staff_name_en',
            'staff_rank_uz',
            //'staff_rank_ru',
            //'staff_rank_en',
            //'staff_img',
            //'staff_menu_sub_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
