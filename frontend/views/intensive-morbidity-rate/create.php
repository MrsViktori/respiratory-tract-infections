<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\IntensiveMorbidityRate $model */

$this->title = 'Create Intensive Morbidity Rate';
$this->params['breadcrumbs'][] = ['label' => 'Intensive Morbidity Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intensive-morbidity-rate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
