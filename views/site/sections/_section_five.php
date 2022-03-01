<?php
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<section class="adress_sect">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="col-md-5 adress_text">
                    <div class="street">
                        <h3>Контакты</h3>
                        <?php if (!empty($contacts)): ?>
                            <p>
                                <?= $contacts[0]->content; ?><br/>
                                <?= $contacts[1]->content; ?><br/>
                                <?= $contacts[2]->content; ?><br/>
                                <?= $contacts[3]->content; ?><br/>
                                <?= $contacts[8]->content; ?><br/>
                                <?= $contacts[5]->content; ?>
                            </p>
                            <p>
                                <?= $contacts[6]->content; ?><br/>
                                <?= $contacts[7]->content; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="doc">
                        <h3>Наши реквизиты</h3>
                        <?php if (!empty($requisites)): ?>
                            <p>
                                <?php foreach ($requisites as $requisite): ?>
                                    <?= $requisite->content; ?><br/>
                                <?php endforeach; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 map_gis">
                    <div id="map" style="width:100%!important;">
                        <?= $scripts[1]->content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .field-backcallform-verifycode span{
        float:left;
    }
</style>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #ecedf1;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Обратный звонок</h2>
            </div>
            <div class="modal-body">
                <p>Заполните форму и мы перезвоним Вам в удобное для Вас время.</p>
                <?php $form = ActiveForm::begin([
                    'options' => ['class' => 'form_style'],
                    'fieldConfig' => [
                        'template' => '<span>{label}</span>{input}{error}',
                        'labelOptions' => ['class' => 'label-left'],
                        'inputOptions' => ['class' => ''],
                    ]]); ?>
                <label>
                    <div class="row">
                        <div class="col-md-6"><?= $form->field($backCall, 'name'); ?></div>
                        <div class="col-md-6"><?= $form->field($backCall, 'phone'); ?></div>
                    </div>
                </label>
                <label>
                    <?= $form->field($backCall, 'theme'); ?>
                </label>
                <label>
                    <div class="row">
                        <div class="col-md-6">
                            <span>Удобное время для звонка</span>
                            <select class="selectel" name="BackCallForm[time]">
                                <?php foreach ($backCall->times as $key => $value): ?>
                                    <option value="<?= $key; ?>"><?= $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6"><?= $form->field($backCall, 'verifyCode')->widget(Captcha::className()); ?></div>
                    </div>
                </label>
                <button type="submit" class="button_style">Отправить</button>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>