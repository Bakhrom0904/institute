<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CommonKafedra */

$this->title = 'Create Common Kafedra';
$this->params['breadcrumbs'][] = ['label' => 'Common Kafedras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="common-kafedra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
