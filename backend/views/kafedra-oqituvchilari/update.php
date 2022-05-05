<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KafedraOqituvchilari */

$this->title = 'Update Kafedra Oqituvchilari: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kafedra Oqituvchilaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kafedra-oqituvchilari-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
