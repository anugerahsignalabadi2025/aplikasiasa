<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\datapelanggan $model */

$this->title = 'Create Datapelanggan';
$this->params['breadcrumbs'][] = ['label' => 'Datapelanggans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapelanggan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
