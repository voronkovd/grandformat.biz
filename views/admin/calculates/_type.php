<?php use yii\grid\GridView; ?>
<div class="panel panel-default">
    <div class="panel-heading">Тип Печати
            <span class="pull-right">
            <a href="/type-prints/create" class=""><i class="glyphicon glyphicon-plus"></i></a>
        </span>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $typePrints,
            'showHeader' => false,
            'layout' => "{items}",
            'columns' => [
                'name',
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '<div class="btn-group">{update}{delete}</div>',
                    'controller' => 'type-prints',
                    'buttonOptions' => ['class' => 'btn btn-default btn-sm'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:100px;']
                ],
            ],
        ]); ?>
    </div>
</div>