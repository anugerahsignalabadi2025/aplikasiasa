<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\saldo $model */

$this->title = 'Create Saldo';
$this->params['breadcrumbs'][] = ['label' => 'Saldos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saldo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
