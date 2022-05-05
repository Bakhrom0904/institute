<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Supporters */

$this->title = 'Update Supporters: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Supporters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supporters-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
