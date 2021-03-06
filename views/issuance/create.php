<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Issuance */

$this->title = 'Create Issuance';
$this->params['breadcrumbs'][] = ['label' => 'Issuances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issuance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'books' => $books,
        'users' => $users,
    ]) ?>

</div>
