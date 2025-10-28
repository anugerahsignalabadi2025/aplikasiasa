<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\kas $model */

$this->title = 'Update Kas: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Kas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'no' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
