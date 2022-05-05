<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FakultetStaffSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fakultet-staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'staff_name_uz') ?>

    <?= $form->field($model, 'staff_name_ru') ?>

    <?= $form->field($model, 'staff_name_en') ?>

    <?= $form->field($model, 'staff_rank_uz') ?>

    <?php // echo $form->field($model, 'staff_rank_ru') ?>

    <?php // echo $form->field($model, 'staff_rank_en') ?>

    <?php // echo $form->field($model, 'staff_img') ?>

    <?php // echo $form->field($model, 'staff_menu_sub_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
