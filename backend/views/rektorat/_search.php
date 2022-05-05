<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RektoratSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rektorat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'lavozim_uz') ?>

    <?php // echo $form->field($model, 'lavozim_ru') ?>

    <?php // echo $form->field($model, 'lavozim_en') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'qabul_vaqti_uz') ?>

    <?php // echo $form->field($model, 'qabul_vaqti_ru') ?>

    <?php // echo $form->field($model, 'qabul_vaqti_en') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telegram') ?>

    <?php // echo $form->field($model, 'manzil_uz') ?>

    <?php // echo $form->field($model, 'manzil_ru') ?>

    <?php // echo $form->field($model, 'manzil_en') ?>

    <?php // echo $form->field($model, 'content_uz') ?>

    <?php // echo $form->field($model, 'content_ru') ?>

    <?php // echo $form->field($model, 'content_en') ?>

    <?php // echo $form->field($model, 'rek_menu_sub_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
