<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MaktabSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maktab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ishkunlari_uz') ?>

    <?= $form->field($model, 'ishkunlari_ru') ?>

    <?= $form->field($model, 'ishkunlari_en') ?>

    <?= $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'manzil_uz') ?>

    <?php // echo $form->field($model, 'manzil_ru') ?>

    <?php // echo $form->field($model, 'manzil_en') ?>

    <?php // echo $form->field($model, 'biriktirilgan_uz') ?>

    <?php // echo $form->field($model, 'biriktirilgan_ru') ?>

    <?php // echo $form->field($model, 'biriktirilgan_en') ?>

    <?php // echo $form->field($model, 'content_uz') ?>

    <?php // echo $form->field($model, 'content_ru') ?>

    <?php // echo $form->field($model, 'content_en') ?>

    <?php // echo $form->field($model, 'allmk_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
