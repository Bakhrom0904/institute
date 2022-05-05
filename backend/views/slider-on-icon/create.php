<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SliderOnIcon */

$this->title = 'Create Slider On Icon';
$this->params['breadcrumbs'][] = ['label' => 'Slider On Icons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-on-icon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
