<?php use yii\grid\GridView; ?>
<div class="panel panel-default">
    <div class="panel-heading">Файлы</div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $files,
            'showHeader' => false,
            'layout' => "{items}",
            'columns' => [
                'name',
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '{update}',
                    'controller' => 'files',
                    'buttonOptions' => ['class' => 'btn btn-default btn-sm'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:30px;']
                ],
            ],
        ]); ?>
    </div>
</div>