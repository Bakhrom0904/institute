<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KafedraOqituvchilari */

$this->title = 'Create Kafedra Oqituvchilari';
$this->params['breadcrumbs'][] = ['label' => 'Kafedra Oqituvchilaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kafedra-oqituvchilari-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
