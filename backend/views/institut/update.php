<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Institut */

$this->title = 'Update Institut: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Instituts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="institut-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
