<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Maktab */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maktabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maktab-view">

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
            'ishkunlari_uz',
            'ishkunlari_ru',
            'ishkunlari_en',
            'tel',
            'fax',
            'manzil_uz',
            'manzil_ru',
            'manzil_en',
            'biriktirilgan_uz',
            'biriktirilgan_ru',
            'biriktirilgan_en',
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'allmk_id',
        ],
    ]) ?>

</div>
