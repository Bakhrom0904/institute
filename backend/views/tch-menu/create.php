<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TchMenu */

$this->title = 'Create Tch Menu';
$this->params['breadcrumbs'][] = ['label' => 'Tch Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tch-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
