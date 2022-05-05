<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Rektorat */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rektorats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rektorat-view">

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
            'img',
            'qabul_vaqti_uz',
            'qabul_vaqti_ru',
            'qabul_vaqti_en',
            'tel',
            'fax',
            'email:email',
            'telegram',
            'manzil_uz',
            'manzil_ru',
            'manzil_en',
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'rek_menu_sub_id',
        ],
    ]) ?>

</div>
