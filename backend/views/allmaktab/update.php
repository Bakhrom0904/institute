<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Allmaktab */

$this->title = 'Update Allmaktab: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Allmaktabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="allmaktab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
