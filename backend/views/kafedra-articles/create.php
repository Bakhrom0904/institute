<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KafedraArticles */

$this->title = 'Create Kafedra Articles';
$this->params['breadcrumbs'][] = ['label' => 'Kafedra Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kafedra-articles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
