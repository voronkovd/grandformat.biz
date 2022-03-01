<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

?>
<?php $type = ArrayHelper::map(\app\models\TypePrints::find()->orderBy('name')->all(), 'id', 'name') ?>
<div class="row">
    <div class="col-md-6">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'type_print_id')->dropDownList($type, ['prompt' => '---------']); ?>
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'price_two')->textInput(['maxlength' => true]) ?>
        <div class="btn-group">
            <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => 'btn btn-success btn-sm']) ?>
            <?= Html::a('Отмена', '/admin/', ['class' => 'btn btn-warning btn-sm']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
