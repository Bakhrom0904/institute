<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\MenuSub;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\FakultetStaff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fakultet-staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staff_name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_rank_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_rank_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_rank_en')->textInput(['maxlength' => true]) ?>

     <?
        if ($model->staff_img == null) {
             echo $form->field($model, 'staff_img')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            ]); 
         }else{
        ?>
            <img src="<?=$model->staff_img; ?>" width='50%'>
        <?
         } 
    ?>

    <?= $form->field($model, 'staff_menu_sub_id')->dropDownList(
        ArrayHelper::map(MenuSub::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => "O'zingizga tegishli fakultetni tanlang",
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
