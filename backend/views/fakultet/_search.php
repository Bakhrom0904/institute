<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FakultetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fakultet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'faculty_uz') ?>

    <?php // echo $form->field($model, 'faculty_ru') ?>

    <?php // echo $form->field($model, 'faculty_en') ?>

    <?php // echo $form->field($model, 'rank_uz') ?>

    <?php // echo $form->field($model, 'rank_ru') ?>

    <?php // echo $form->field($model, 'rank_en') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'content_uz') ?>

    <?php // echo $form->field($model, 'content_ru') ?>

    <?php // echo $form->field($model, 'content_en') ?>

    <?php // echo $form->field($model, 'qabul_date_uz') ?>

    <?php // echo $form->field($model, 'qabul_date_ru') ?>

    <?php // echo $form->field($model, 'qabul_date_en') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telegram') ?>

    <?php // echo $form->field($model, 'address_uz') ?>

    <?php // echo $form->field($model, 'address_ru') ?>

    <?php // echo $form->field($model, 'address_en') ?>

    <?php // echo $form->field($model, 'staff_uz') ?>

    <?php // echo $form->field($model, 'staff_ru') ?>

    <?php // echo $form->field($model, 'staff_en') ?>

    <?php // echo $form->field($model, 'menu_sub_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
