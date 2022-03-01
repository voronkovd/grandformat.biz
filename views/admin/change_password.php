<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Изменить пароль';
?>
<div class="site-contact">
    <h4><?= Html::encode($this->title) ?></h4>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'change-password-form']); ?>
            <?= $form->field($model, 'password')->passwordInput(); ?>
            <?= $form->field($model, 'passwordConfirm')->passwordInput(); ?>
            <div class="form-group">
                <?= Html::submitButton('Изменить', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
