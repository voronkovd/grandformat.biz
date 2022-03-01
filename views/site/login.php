<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
?>
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-signin'],
    'fieldConfig' => [
        'template' => "{label}{input}{error}",
        'labelOptions' => ['class' => 'sr-only'],
        'inputOptions' => ['class' => 'form-control'],
    ],
]); ?>
<h4 class="form-signin-heading"><?= Html::encode($this->title) ?></h4>
<?= $form->field($model, 'username', ['inputOptions'=>['placeholder'=>'Логин']]) ?>

<?= $form->field($model, 'password', ['inputOptions'=>['placeholder'=>'Пароль']])->passwordInput() ?>
<div class="row">
    <div class="col-md-6">
        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-sm', 'name' => 'login-button']) ?>
    </div>
    <div class="col-md-6 text-right">
        <div class="checkbox">
            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "{input}{label}",
            ]) ?>
        </div>
    </div>
</div>


<?php ActiveForm::end(); ?>
