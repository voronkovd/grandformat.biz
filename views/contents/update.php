<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Обновить блок: ' . $model->title;
?>
<div class="contents-update">

    <h4><?= Html::encode($this->title) ?></h4>
    <br>

    <div class="row">
        <div class="col-md-6">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
            <div class="btn-group">
                <?= Html::submitButton('Изменить', ['class' => 'btn btn-success btn-sm']) ?>
                <?= Html::a('Отмена', '/admin/', ['class' => 'btn btn-warning btn-sm']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>