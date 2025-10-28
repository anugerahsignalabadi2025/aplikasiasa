<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\saldo $model */

$this->title = 'Update Saldo: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Saldos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="saldo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
