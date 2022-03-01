<?php use yii\grid\GridView; ?>
<div class="panel panel-default">
    <div class="panel-heading">Ревизиты</div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $requisites,
            'showHeader' => false,
            'layout' => "{items}",
            'columns' => [
                'content',
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '{update}',
                    'controller' => 'requisites',
                    'buttonOptions' => ['class' => 'btn btn-default btn-sm'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:30px;']
                ],
            ],
        ]); ?>
    </div>
</div>