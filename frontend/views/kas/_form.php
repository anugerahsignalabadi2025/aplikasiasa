<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\kas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
