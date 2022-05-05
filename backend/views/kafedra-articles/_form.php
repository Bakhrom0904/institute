<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\KafedraOqituvchilari;

/* @var $this yii\web\View */
/* @var $model backend\models\KafedraArticles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kafedra-articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article_degree_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article_degree_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article_degree_en')->textInput(['maxlength' => true]) ?>

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

     <?= $form->field($model, 'art_kafedra_oqituvchilari_id')->dropDownList(
        ArrayHelper::map(KafedraOqituvchilari::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => "Domlani tanlang",
        ]); ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
