<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TchMenu */

$this->title = 'Update Tch Menu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tch Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tch-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
