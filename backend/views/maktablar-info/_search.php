<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MaktablarInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maktablar-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'kimga_biriktirilgan_uz') ?>

    <?php // echo $form->field($model, 'kimga_biriktirilgan_ru') ?>

    <?php // echo $form->field($model, 'kimga_biriktirilgan_en') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'manzil_uz') ?>

    <?php // echo $form->field($model, 'manzil_ru') ?>

    <?php // echo $form->field($model, 'manzil_en') ?>

    <?php // echo $form->field($model, 'sektor_uz') ?>

    <?php // echo $form->field($model, 'sektor_ru') ?>

    <?php // echo $form->field($model, 'sektor_en') ?>

    <?php // echo $form->field($model, 'maktab_tarixi_uz') ?>

    <?php // echo $form->field($model, 'maktab_tarixi_ru') ?>

    <?php // echo $form->field($model, 'maktab_tarixi_en') ?>

    <?php // echo $form->field($model, 'maktab_teacher_uz') ?>

    <?php // echo $form->field($model, 'maktab_teacher_ru') ?>

    <?php // echo $form->field($model, 'maktab_teacher_en') ?>

    <?php // echo $form->field($model, 'maktab_pupil_uz') ?>

    <?php // echo $form->field($model, 'maktab_pupil_ru') ?>

    <?php // echo $form->field($model, 'maktab_pupil_en') ?>

    <?php // echo $form->field($model, 'maktab_pasporti_uz') ?>

    <?php // echo $form->field($model, 'maktab_togaraklar_uz') ?>

    <?php // echo $form->field($model, 'maktab_togaraklar_ru') ?>

    <?php // echo $form->field($model, 'maktab_togaraklar_en') ?>

    <?php // echo $form->field($model, 'maktab_pasporti_ru') ?>

    <?php // echo $form->field($model, 'maktab_pasporti_en') ?>

    <?php // echo $form->field($model, 'maktab_info_menu_sub_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
