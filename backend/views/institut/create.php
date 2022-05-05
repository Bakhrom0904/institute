<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Institut */

$this->title = 'Create Institut';
$this->params['breadcrumbs'][] = ['label' => 'Instituts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institut-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
