 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Kafedralar;

/* @var $this yii\web\View */
/* @var $model backend\models\KafedraOqituvchilari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kafedra-oqituvchilari-form">

    <?php $form = ActiveForm::begin(); ?>

    <?
            $content1 = 
            $form->field($model, 'name_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'lavozimi_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'darajasi_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'qabul_uz')->textInput(['maxlength' => true]).
            $form->field($model, 'content_uz')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

        <?
            $content2 = 
            $form->field($model, 'name_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'lavozimi_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'darajasi_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'qabul_ru')->textInput(['maxlength' => true]).
            $form->field($model, 'content_ru')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

        <?
            $content3 = 
            $form->field($model, 'name_en')->textInput(['maxlength' => true]).
            $form->field($model, 'lavozimi_en')->textInput(['maxlength' => true]).
            $form->field($model, 'darajasi_en')->textInput(['maxlength' => true]).
            $form->field($model, 'manzil_en')->textInput(['maxlength' => true]).
            $form->field($model, 'qabul_en')->textInput(['maxlength' => true]).
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

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'comm_kafedra_id')->dropDownList(
        ArrayHelper::map(Kafedralar::find()->all(), 'id', 'name_uz'),
        [
            'prompt' => "Menu Subni tanlang",
        ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>