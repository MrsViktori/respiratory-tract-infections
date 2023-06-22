<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\IntensiveMorbidityRate $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="intensive-morbidity-rate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number_week')->textInput() ?>

    <?= $form->field($model, 'year_of_morbidity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
