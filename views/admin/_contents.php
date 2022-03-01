<br>
<?php use yii\grid\GridView; ?>
<div class="panel panel-default">
    <div class="panel-heading">Блоки с информацией</div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $contents,
            'showHeader' => false,
            'layout' => "{items}",
            'columns' => [
                'title',
                'content',
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '{update}',
                    'controller' => 'contents',
                    'buttonOptions' => ['class' => 'btn btn-default btn-sm'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:30px;']
                ],
            ],
        ]); ?>
    </div>
</div>