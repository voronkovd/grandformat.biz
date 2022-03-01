<?php use yii\grid\GridView; ?>
<div class="panel panel-default">
    <div class="panel-heading">СЕО Настройки</div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $seoSettings,
            'showHeader' => false,
            'layout' => "{items}",
            'columns' => [
                'name',
                ['class' => 'yii\grid\ActionColumn',
                    'template' => '{update}',
                    'controller' => 'seo',
                    'buttonOptions' => ['class' => 'btn btn-default btn-sm'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:30px;']
                ],
            ],
        ]); ?>
    </div>
</div>