<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KafedraArticles */

$this->title = 'Update Kafedra Articles: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kafedra Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kafedra-articles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
