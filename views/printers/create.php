<?php
use yii\helpers\Html;

$this->title = 'Добавить печать';
?>
<div class="printers-create">
    <h4><?= Html::encode($this->title) ?></h4>
    <br>
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
