<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\paketinternet $model */

$this->title = 'Update Paketinternet: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Paketinternets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paketinternet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
