<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;

$books = ArrayHelper::map($books, 'id', 'name', 'idGenre', 'idPublisher');
$users = ArrayHelper::map($users, 'id', 'lastname', 'firstname', 'birthday'); 
/* @var $this yii\web\View */
/* @var $model app\models\Issuance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issuance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idBook')->dropDownList($books) ?>

    <?= $form->field($model, 'idUser')->dropDownList($users) ?>
    
    <?= $form->field($model, 'dateStart')->textInput() ?>

    <?= $form->field($model, 'dateFinish')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
