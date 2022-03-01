<br>
<?php use yii\grid\GridView; ?>
<div class="panel panel-default">
    <div class="panel-heading">Печать
        <span class="pull-right">
            <a href="/printers/create" class=""><i class="glyphicon glyphicon-plus"></i></a>
        </span>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $printers,
            'showHeader' => false,
            'layout' => "{items}",
            'columns' => [
                'title',
                'image',
                'document',
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '{update}',
                    'controller' => 'printers',
                    'buttonOptions' => ['class' => 'btn btn-default btn-sm'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:30px;']
                ],
            ],
        ]); ?>
    </div>
</div>