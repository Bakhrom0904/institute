<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\FakultetStaff;

/* @var $this yii\web\View */
/* @var $model backend\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chop_etilgan_joy_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chop_etilgan_joy_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chop_etilgan_joy_en')->textInput(['maxlength' => true]) ?>

    <value><b>Chop etilgan sana</b></value>
   <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
    ]);?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'book_fak_staff_id')->dropDownList(
        ArrayHelper::map(FakultetStaff::find()->all(), 'id', 'staff_name_uz'),
        [
            'prompt' => "Domlani tanlang",
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

