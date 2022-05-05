<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DirektorSlider */

$this->title = 'Create Direktor Slider';
$this->params['breadcrumbs'][] = ['label' => 'Direktor Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direktor-slider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
