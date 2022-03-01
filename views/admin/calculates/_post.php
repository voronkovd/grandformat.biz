<?php use yii\grid\GridView; ?>
<div class="panel panel-default">
    <div class="panel-heading">Пост Печать</div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $postPrints,
            'showHeader' => false,
            'layout' => "{items}",
            'columns' => [
                'name',
                ['format' => 'raw','attribute'=>'price', 'value'=>function($model){return $model->price_clear();}],
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '<div class="btn-group">{update}</div>',
                    'controller' => 'post-prints',
                    'buttonOptions' => ['class' => 'btn btn-default btn-sm'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:50px;']
                ],
            ],
        ]); ?>
    </div>
</div>