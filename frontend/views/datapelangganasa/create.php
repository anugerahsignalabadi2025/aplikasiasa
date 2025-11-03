<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\datapelangganasa $model */

$this->title = 'Create Datapelangganasa';
$this->params['breadcrumbs'][] = ['label' => 'Datapelangganasa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapelangganasa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
