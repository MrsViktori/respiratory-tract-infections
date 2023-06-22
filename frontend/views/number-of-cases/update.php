<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\NumberOfCases $model */

$this->title = 'Update Number Of Cases: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Number Of Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="number-of-cases-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
