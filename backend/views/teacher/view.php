<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="teacher-view">

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
            'lavozim_uz',
            'lavozim_ru',
            'lavozim_en',
            'rank_uz',
            'rank_ru',
            'rank_en',
            'telegram',
            'facebook',
            'instagram',
            'email:email',
            'phone',
            'birth',
            'address_uz',
            'address_ru',
            'address_en',
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'img',
            'staff_id',
        ],
    ]) ?>

</div>
