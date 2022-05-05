<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\web\UploadedFile;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model backend\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(); ?>

  <?
        if ($model->slider_img == null) {
             echo $form->field($model, 'slider_img')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            ]); 
         }else{
        ?>
            <img src="../../frontend/web/arguments/slider/<?=$model->slider_img; ?>" width='50%'>
        <?
         } 
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
