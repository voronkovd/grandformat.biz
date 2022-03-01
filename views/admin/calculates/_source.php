<?php use yii\grid\GridView; ?>
<div class="panel panel-default">
    <div class="panel-heading">Материал Печати
            <span class="pull-right">
            <a href="/source-prints/create" class=""><i class="glyphicon glyphicon-plus"></i></a>
        </span>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $sourcePrints,
            'showHeader' => false,
            'layout' => "{items}",
            'columns' => [
                'name',
                ['format' => 'raw', 'attribute' => 'price', 'value' => function ($model) {
                    return $model->price_clear();
                }],
                ['format' => 'raw', 'attribute' => 'price_two', 'value' => function ($model) {
                    return $model->price_two_clear();
                }],
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '<div class="btn-group">{update}{delete}</div>',
                    'controller' => 'source-prints',
                    'buttonOptions' => ['class' => 'btn btn-default btn-sm'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:100px;']
                ],
            ],
        ]); ?>
    </div>
</div>