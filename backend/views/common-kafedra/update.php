<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonKafedra */

$this->title = 'Update Common Kafedra: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Common Kafedras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="common-kafedra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
