<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\NumberOfCases $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="number-of-cases-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'number_of_cases_children')->textInput() ?>

    <?= $form->field($model, 'number_of_cases_adults')->textInput() ?>

    <?= $form->field($model, 'number_of_cases_elderly')->textInput() ?>

    <?= $form->field($model, 'number_of_cases_all')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
