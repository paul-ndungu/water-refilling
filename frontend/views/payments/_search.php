<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PaymentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'paymentId') ?>

    <?= $form->field($model, 'orderId') ?>

    <?= $form->field($model, 'customerId') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'paymentTypeId') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
