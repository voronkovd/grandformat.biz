<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Изменить: ' . $model->name;
?>
<div class="scripts-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <div class="row">
        <div class="col-md-6">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
            <div class="btn-group">
                <?= Html::submitButton('Изменить', ['class' => 'btn btn-success btn-sm']) ?>
                <?= Html::a('Отмена', '/admin/', ['class' => 'btn btn-warning btn-sm']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
