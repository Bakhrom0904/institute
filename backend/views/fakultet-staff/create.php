<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FakultetStaff */

$this->title = 'Create Fakultet Staff';
$this->params['breadcrumbs'][] = ['label' => 'Fakultet Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakultet-staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
