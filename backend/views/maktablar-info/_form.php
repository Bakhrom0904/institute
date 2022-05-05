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
/* @var $model backend\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maktablar-info-form">

    <?php $form = ActiveForm::begin(); ?>

     <?
            $content1 = 
            $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'sektor_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'kimga_biriktirilgan_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'maktab_tarixi_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_teacher_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_pupil_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_pasporti_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_togaraklar_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

        <?
            $content2 = 
            $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'sektor_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'kimga_biriktirilgan_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'maktab_tarixi_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_teacher_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_pupil_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_pasporti_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_togaraklar_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

        <?
            $content3 = 
            $form->field($model, 'name_en')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_en')->textInput(['maxlength' => true]).
            $form->field($model, 'sektor_en')->textInput(['maxlength' => true]).
            $form->field($model, 'kimga_biriktirilgan_en')->textInput(['maxlength' => true]).
            $form->field($model, 'maktab_tarixi_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_teacher_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_pupil_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_pasporti_en')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]).
            $form->field($model, 'maktab_togaraklar_en')->widget(CKEditor::className(),[
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

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'maktab_info_menu_sub_id')->dropDownList(
        ArrayHelper::map(MenuSub::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => "Menu Subni tanlang",
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
