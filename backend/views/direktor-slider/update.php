<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DirektorSlider */

$this->title = 'Update Direktor Slider: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Direktor Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="direktor-slider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
