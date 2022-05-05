<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tutor Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tutor-info-view">

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
            'biriktirilgan_uz',
            'biriktirilgan_ru',
            'biriktirilgan_en',
            'tel',
            'telegram',
            'email:email',
            'manzil_uz:ntext',
            'manzil_ru:ntext',
            'manzil_en:ntext',
            'img',
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'tutor_duty_uz:ntext',
            'tutor_duty_ru:ntext',
            'tutor_duty_en:ntext',
            'birik_talaba_royxati_uz:ntext',
            'birik_talaba_royxati_ru:ntext',
            'birik_talaba_royxati_en:ntext',
            'tutor_menu_sub_id',
            'tutor_faculty_id',
        ],
    ]) ?>

</div>
