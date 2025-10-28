<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\pengeluaran $model */

$this->title = 'Update Pengeluaran: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengeluaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
