<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="row">
    <div class="col-md-6">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        <div class="btn-group">
            <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => 'btn btn-success btn-sm']) ?>
            <?= Html::a('Отмена', '/admin/', ['class' => 'btn btn-warning btn-sm']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>