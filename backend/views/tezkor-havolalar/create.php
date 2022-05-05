<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TezkorHavolalar */

$this->title = 'Create Tezkor Havolalar';
$this->params['breadcrumbs'][] = ['label' => 'Tezkor Havolalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tezkor-havolalar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
