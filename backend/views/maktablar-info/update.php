<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MaktablarInfo */

$this->title = 'Update Maktablar Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maktablar Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maktablar-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
