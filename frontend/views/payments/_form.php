<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Payments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orderId')->textInput() ?>

    <?= $form->field($model, 'customerId')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'paymentTypeId')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
