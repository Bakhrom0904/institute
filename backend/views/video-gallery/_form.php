<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\VideoGallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-gallery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_en')->textInput(['maxlength' => true]) ?>

     <?
        if ($model->img == null) {
             echo $form->field($model, 'img')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            ]); 
         }else{
        ?>
            <img src="<?=$model->img; ?>" width='50%'>
        <?
         } 
    ?>

    <?= $form->field($model, 'link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'video_duration')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
