<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\datapelangganasaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="datapelangganasa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'nohp') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'tanggalpasang') ?>

    <?php // echo $form->field($model, 'paket') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
