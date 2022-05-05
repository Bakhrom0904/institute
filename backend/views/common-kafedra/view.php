<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonKafedra */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Common Kafedras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="common-kafedra-view">

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
            'img',
            'lavozim_uz',
            'lavozim_ru',
            'lavozim_en',
            'darajasi_uz',
            'darajasi_ru',
            'darajasi_en',
            'kafedra_hodim_uz',
            'kafedra_hodim_ru',
            'kafedra_hodim_en',
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'qabul_uz',
            'qabul_ru',
            'qabul_en',
            'manzil_uz',
            'manzil_ru',
            'manzil_en',
            'tel',
            'email_uz:email',
            'telegram',
            'kafedra_id',
        ],
    ]) ?>

</div>
