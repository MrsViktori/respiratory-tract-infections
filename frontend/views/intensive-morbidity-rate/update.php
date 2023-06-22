<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\IntensiveMorbidityRate $model */

$this->title = 'Update Intensive Morbidity Rate: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Intensive Morbidity Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="intensive-morbidity-rate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
