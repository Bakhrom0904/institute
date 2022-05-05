<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Supporters */

$this->title = 'Create Supporters';
$this->params['breadcrumbs'][] = ['label' => 'Supporters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supporters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
