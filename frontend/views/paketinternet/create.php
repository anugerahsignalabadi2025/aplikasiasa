<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\paketinternet $model */

$this->title = 'Create Paketinternet';
$this->params['breadcrumbs'][] = ['label' => 'Paketinternets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paketinternet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
