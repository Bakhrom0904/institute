<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Emblems */

$this->title = 'Create Emblems';
$this->params['breadcrumbs'][] = ['label' => 'Emblems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emblems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
