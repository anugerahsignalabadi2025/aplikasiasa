<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\saldo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="saldo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'saldoperusahaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
