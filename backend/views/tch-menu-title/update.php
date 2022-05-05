<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TchMenuTitle */

$this->title = 'Update Tch Menu Title: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tch Menu Titles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tch-menu-title-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
