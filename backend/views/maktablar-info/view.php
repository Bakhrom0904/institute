<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MaktablarInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maktablar Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maktablar-info-view">

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
            'kimga_biriktirilgan_uz:ntext',
            'kimga_biriktirilgan_ru:ntext',
            'kimga_biriktirilgan_en:ntext',
            'tel',
            'email:email',
            'fax',
            'manzil_uz:ntext',
            'manzil_ru:ntext',
            'manzil_en:ntext',
            'sektor_uz',
            'sektor_ru',
            'sektor_en',
            'maktab_tarixi_uz:ntext',
            'maktab_tarixi_ru:ntext',
            'maktab_tarixi_en:ntext',
            'maktab_teacher_uz:ntext',
            'maktab_teacher_ru:ntext',
            'maktab_teacher_en:ntext',
            'maktab_pupil_uz:ntext',
            'maktab_pupil_ru:ntext',
            'maktab_pupil_en:ntext',
            'maktab_pasporti_uz:ntext',
            'maktab_togaraklar_uz:ntext',
            'maktab_togaraklar_ru:ntext',
            'maktab_togaraklar_en',
            'maktab_pasporti_ru:ntext',
            'maktab_pasporti_en:ntext',
            'maktab_info_menu_sub_id',
        ],
    ]) ?>

</div>
