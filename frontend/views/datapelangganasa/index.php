<?php

use common\models\datapelangganasa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\datapelangganasaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

// $this->title = 'Datapelangganasa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapelangganasa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Datapelangganasa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'no',
            'nama',
            'nohp',
            'alamat',
            'tanggalpasang',
            //'paket',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, datapelangganasa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no' => $model->no]);
                 }
            ],
        ],
    ]); ?>


</div>
