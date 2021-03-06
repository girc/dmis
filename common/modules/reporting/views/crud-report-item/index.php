<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\reporting\models\search\ReportItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Report Items');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Report Item',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'subtype_name',
            'item_name',
            'title',
            // 'description:ntext',
            // 'is_verified:boolean',
            // 'timestamp_created',
            // 'timestamp_updated',
            // 'tags',
            // 'meta_hstore',
            // 'meta_json',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
