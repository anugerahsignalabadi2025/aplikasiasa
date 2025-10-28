<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\datapelanggan $model */

$this->title = 'Update Datapelanggan: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Datapelanggans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datapelanggan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
