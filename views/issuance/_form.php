<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Issuance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issuance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idBook')->textInput() ?>

    <?= $form->field($model, 'idUser')->textInput() ?>

    <?= $form->field($model, 'dateStart')->textInput() ?>

    <?= $form->field($model, 'dateFinish')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
