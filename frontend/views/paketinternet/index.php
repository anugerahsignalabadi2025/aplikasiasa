<?php

use common\models\paketinternet;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\paketinternetSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Paketinternets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paketinternet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Paketinternet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no',
            'paket',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, paketinternet $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no' => $model->no]);
                 }
            ],
        ],
    ]); ?>


</div>
