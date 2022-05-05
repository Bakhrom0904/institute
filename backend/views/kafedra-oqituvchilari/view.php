<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KafedraOqituvchilari */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kafedra Oqituvchilaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kafedra-oqituvchilari-view">

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
            'content_uz:ntext',
            'content_ru:ntext',
            'content_en:ntext',
            'img',
            'lavozimi_uz',
            'lavozimi_ru',
            'lavozimi_en',
            'darajasi_uz',
            'darajasi_ru',
            'darajasi_en',
            'telegram',
            'email:email',
            'tel',
            'manzil_uz',
            'manzil_ru',
            'manzil_en',
            'qabul_uz',
            'qabul_ru',
            'qabul_en',
            'comm_kafedra_id',
        ],
    ]) ?>

</div>
