<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Deals */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deals-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'coupon_id')->textInput(['readonly' => 'readonly']) ?>

    <?= $form->field($model, 'program_id')->dropDownList(app\helpers\AppHelper::getStoresAsProgram(), [
        'prompt' => 'Please Select',
    ]) ?>

    <?= $form->field($model, 'coupon_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'voucher_types')->dropDownList([ 'V' => 'Voucher', 'P' => 'Promotion', ], ['prompt' => 'Please Select']) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'expire_date')->textInput() ?>

    <?= $form->field($model, 'last_change_date')->textInput() ?>

    <?= $form->field($model, 'partnership_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'integration_code')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'featured')->checkbox() ?>

    <?= $form->field($model, 'minimum_order_value')->textInput() ?>

    <?= $form->field($model, 'customer_restriction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sys_user_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destination_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_fixed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_variable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_code')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'network_id')->dropDownList(app\helpers\AppHelper::getAllNetwork(), [
        'prompt' => 'Please Select',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
