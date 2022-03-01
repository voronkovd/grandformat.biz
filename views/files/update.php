<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Загрузить файл: ' . $model->name;
?>
<div class="files-update">
    <h4><?= Html::encode($this->title) ?></h4>
    <br>

    <div class="row">
        <div class="col-md-6">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <?php if (!empty($model->value)): ?>
                Сейчас: <?= Html::a($model->value, '/uploads/' . $model->value, ['target'=>'_blank']); ?>
            <?php endif; ?>
            <?= $form->field($model, 'value')->fileInput(); ?>
            <div class="btn-group">
                <?= Html::submitButton('Загрузить', ['class' => 'btn btn-success btn-sm']) ?>
                <?= Html::a('Отмена', '/admin/', ['class' => 'btn btn-warning btn-sm']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
