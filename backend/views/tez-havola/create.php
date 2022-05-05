<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TezHavola */

$this->title = 'Create Tez Havola';
$this->params['breadcrumbs'][] = ['label' => 'Tez Havolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tez-havola-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
