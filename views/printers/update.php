<?php
use yii\helpers\Html;

$this->title = 'Изменить печать: ' . $model->title;
?>
<div class="printers-update">
    <h4><?= Html::encode($this->title) ?></h4>
    <br/>
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
