<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmbPages */

$this->title = 'Create Emb Pages';
$this->params['breadcrumbs'][] = ['label' => 'Emb Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emb-pages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
