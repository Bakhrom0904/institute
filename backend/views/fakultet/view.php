<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Fakultet */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fakultets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fakultet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_uz',
            'name_ru',
            'name_en',
            'faculty_uz',
            'faculty_ru',
            'faculty_en',
            'rank_uz',
            'rank_ru',
            'rank_en',
            'img',
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'qabul_date_uz',
            'qabul_date_ru',
            'qabul_date_en',
            'tel',
            'fax',
            'email:email',
            'telegram',
            'address_uz',
            'address_ru',
            'address_en',
            'staff_uz',
            'staff_ru',
            'staff_en',
            'menu_sub_id',
        ],
    ]) ?>

</div>
