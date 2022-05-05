<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\MenuSub;

/* @var $this yii\web\View */
/* @var $model backend\models\Fakultet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fakultet-form">

    <?php $form = ActiveForm::begin(); ?>

     <?
            $content1 = 
            $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'faculty_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'rank_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'qabul_date_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'address_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'staff_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'content_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

        <?
            $content2 = 
            $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'faculty_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'rank_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'qabul_date_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'address_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'staff_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'content_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

        <?
            $content3 = 
            $form->field($model, 'name_en')->textInput(['maxlength' => true]).
            $form->field($model, 'faculty_en')->textInput(['maxlength' => true]).
            $form->field($model, 'rank_en')->textInput(['maxlength' => true]).
            $form->field($model, 'qabul_date_en')->textInput(['maxlength' => true]).
            $form->field($model, 'address_en')->textInput(['maxlength' => true]).
            $form->field($model, 'staff_en')->textInput(['maxlength' => true]).
            $form->field($model, 'content_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

       <? 
           $items = [
                [
                    'label'=>'<i class="fa fa-home"></i> Uzbek',
                    'content'=>$content1,
                ],
                [
                    'label'=>'<i class="fa fa-user"></i> Russian',
                    'content'=>$content2,
                ],
                [
                    'label'=>'<i class="fa fa-user"></i> English',
                    'content'=>$content3,
                ],
            ];

        ?>
        <?
            echo TabsX::widget([
                'items'=>$items,
                'position'=>TabsX::POS_ABOVE,
                'encodeLabels'=>false
            ]);
        ?>

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

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'menu_sub_id')->dropDownList(
        ArrayHelper::map(MenuSub::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => "O'zingizga tegishli fakultetni tanlang",
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
