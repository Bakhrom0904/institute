<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Allmaktab */

$this->title = 'Create Allmaktab';
$this->params['breadcrumbs'][] = ['label' => 'Allmaktabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allmaktab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
