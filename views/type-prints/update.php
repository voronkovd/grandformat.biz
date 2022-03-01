<?php
use yii\helpers\Html;

$this->title = 'Изменить тип печати: ' . $model->name;
?>
<div class="type-prints-update">
    <h4><?= Html::encode($this->title) ?></h4>
    <br/>
    <?= $this->render('_form', ['model' => $model]) ?>
</div>