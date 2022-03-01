<?php

use yii\helpers\Html;

$this->title = 'Добавить Тип Печати';
?>
<div class="type-prints-create">

    <h4><?= Html::encode($this->title) ?></h4>
    <br/>
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
