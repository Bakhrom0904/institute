<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tutor-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'biriktirilgan_uz') ?>

    <?php // echo $form->field($model, 'biriktirilgan_ru') ?>

    <?php // echo $form->field($model, 'biriktirilgan_en') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'telegram') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'manzil_uz') ?>

    <?php // echo $form->field($model, 'manzil_ru') ?>

    <?php // echo $form->field($model, 'manzil_en') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'content_uz') ?>

    <?php // echo $form->field($model, 'content_ru') ?>

    <?php // echo $form->field($model, 'content_en') ?>

    <?php // echo $form->field($model, 'tutor_duty_uz') ?>

    <?php // echo $form->field($model, 'tutor_duty_ru') ?>

    <?php // echo $form->field($model, 'tutor_duty_en') ?>

    <?php // echo $form->field($model, 'birik_talaba_royxati_uz') ?>

    <?php // echo $form->field($model, 'birik_talaba_royxati_ru') ?>

    <?php // echo $form->field($model, 'birik_talaba_royxati_en') ?>

    <?php // echo $form->field($model, 'tutor_menu_sub_id') ?>

    <?php // echo $form->field($model, 'tutor_faculty_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
