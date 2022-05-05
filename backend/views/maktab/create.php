<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Maktab */

$this->title = 'Create Maktab';
$this->params['breadcrumbs'][] = ['label' => 'Maktabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maktab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
