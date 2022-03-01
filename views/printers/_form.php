<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="row">
    <div class="col-md-6">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        <?php if (!empty($model->image)): ?>
            Сейчас: <?= Html::a($model->image, '/uploads/' . $model->image, ['target' => '_blank']); ?>
            <?= $form->field($model, 'old_image')->hiddenInput(['value' => $model->image]); ?>
        <?php endif; ?>
        <?= $form->field($model, 'image')->fileInput(); ?>
        <?php if (!empty($model->document)): ?>
            Сейчас: <?= Html::a($model->document, '/uploads/' . $model->document, ['target' => '_blank']); ?>
            <?= $form->field($model, 'old_document')->hiddenInput(['value' => $model->document]); ?>
        <?php endif; ?>
        <?= $form->field($model, 'document')->fileInput(); ?>

        <?php if (!empty($model->desc)): ?>
            Сейчас: <?= Html::a($model->desc, '/uploads/' . $model->desc, ['target' => '_blank']); ?>
            <?= $form->field($model, 'old_desc')->hiddenInput(['value' => $model->desc]); ?>
        <?php endif; ?>
        <?= $form->field($model, 'desc')->fileInput(); ?>
        <div class="btn-group">
            <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => 'btn btn-success btn-sm']) ?>
            <?= Html::a('Отмена', '/admin/', ['class' => 'btn btn-warning btn-sm']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
