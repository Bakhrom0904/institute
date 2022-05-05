<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Menu;
/* @var $this yii\web\View */
/* @var $model backend\models\TchMenuTitle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tch-menu-title-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tch_menu_id')->dropDownList(
    	ArrayHelper::map(TchMenu::find()->all(), 'id', 'name_uz'),
    	[
    		'prompt' => "Fakultetni tanlang",
    	]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
