<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\datapelangganasa $model */

$this->title = 'Update Datapelangganasa: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Datapelangganasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datapelangganasa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
