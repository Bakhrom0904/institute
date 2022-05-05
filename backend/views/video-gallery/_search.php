<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VideoGallerySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-gallery-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'type_uz') ?>

    <?php // echo $form->field($model, 'type_ru') ?>

    <?php // echo $form->field($model, 'type_en') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'video_duration') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
