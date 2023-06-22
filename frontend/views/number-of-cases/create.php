<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\NumberOfCases $model */

$this->title = 'Create Number Of Cases';
$this->params['breadcrumbs'][] = ['label' => 'Number Of Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="number-of-cases-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
