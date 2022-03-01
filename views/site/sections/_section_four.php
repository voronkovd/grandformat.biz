<?php use yii\bootstrap\ActiveForm; ?>
<style>
    .selectel {
        width: 100%;
        padding: 5px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        outline: 0;
        margin-bottom: 5px;
        border: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-color: white;
        background-image: url(img/arrow.png);
        background-position: right;
        background-repeat: no-repeat;
        cursor: pointer;
    }

    .help-block-error {
        font-size: 10px;
        color: #f24841;
        display: inline;
        margin-top: 3px;
        margin-left: 0px;
        margin-bottom: 0px;
        min-height: 18px;
        display: block;
    }

    .alert-success {
        color: #5cb85c;
        text-align: center;
    }
</style>
<section id="send-section" class="send">
    <div class="container">
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <div class="alert-success text-center">Сообщение отправлено. Мы вам ответим в ближайшее время, спасибо!
            </div>
        <?php endif; ?>
        <?php if (Yii::$app->session->hasFlash('backCallFormSubmitted')): ?>
            <div class="alert-success text-center">Наши специалисты перезвонят в указанное вами время!</div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 form_wrap" style="margin-bottom: 30px;">
                    <div class="calc_main" style="padding: 6px 43px 55px 0px;background: none;">
                        <div class="calc_wrap">
                            <h2 style="margin-bottom: 5px;margin-top:0px;">Сделать заказ онлайн</h2>
                            <?php $form = ActiveForm::begin(['id' => 'contact-form',
                                'options' => ['class' => 'form_style', 'style' => 'margin-bottom:15px;'],
                                'fieldConfig' => [
                                    'template' => '<span>{label}</span>{input}{error}',
                                    'labelOptions' => ['class' => 'label-left'],
                                    'inputOptions' => ['class' => ''],
                                ]]); ?>
                            <label>
                                <?= $form->field($contactForm, 'name'); ?>
                            </label>
                            <label>
                                <div class="row">
                                    <div class="col-md-6"><?= $form->field($contactForm, 'email'); ?></div>
                                    <div class="col-md-6"><?= $form->field($contactForm, 'phone'); ?></div>
                                </div>
                            </label>
                            <label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span> Тип печати</span>
                                        <select class="selectel" id="select_type" name="ContactForm[type]">
                                            <option value></option>
                                            <?php if (!empty($typePrints)): ?>
                                                <?php foreach ($typePrints as $typePrint): ?>
                                                    <option
                                                        value="<?= $typePrint->id; ?>"><?= $typePrint->name; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>

                                        <p class="help-block help-block-error"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <span>Материал</span>
                                        <select class="selectel" id="select_source" name="ContactForm[source]"></select>

                                        <p class="help-block help-block-error"></p>
                                    </div>
                                </div>
                            </label>
                            <label>
                                <div class="row">
                                    <div class="col-md-4"><?= $form->field($contactForm, 'w'); ?></div>
                                    <div class="col-md-4"><?= $form->field($contactForm, 'h'); ?></div>
                                    <div class="col-md-4"><?= $form->field($contactForm, 'count'); ?></div>
                                </div>
                            </label>
                            <label><?= $form->field($contactForm, 'comment'); ?></label>

                            <div class="button_wrap">
                                <div class="pull-left">
                                    <button type="submit" class="button_style">Отправить</button>
                                </div>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 calc">
                    <div class="calc_main">
                        <div class="calc_wrap">
                            <h2 style="margin-bottom: 5px;margin-top:0px;">Калькулятор заказа</h2>
                            <label>
                                <span>Выберите тип печати</span>
                                <select name="select" id="type_print">
                                    <option value></option>
                                    <?php if (!empty($typePrints)): ?>
                                        <?php foreach ($typePrints as $typePrint): ?>
                                            <option
                                                value="<?= $typePrint->id; ?>"><?= $typePrint->name; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>

                                <p class="help-block help-block-error"></p>
                            </label>
                            <label>
                                <span>Выберите материал</span>
                                <select name="select" id="source_print" class="calc_vars"></select>

                                <p class="help-block help-block-error"></p>
                            </label>

                            <div class="line">
                                <label class="line_labels">
                                    <span>Ширина, м</span>
                                    <input id="w-id" class="calc_vars" type="number" min="1" step="any">

                                    <p class="help-block help-block-error"></p>
                                </label>
                                <label class="line_labels">
                                    <span>Высота, м</span>
                                    <input id="h-id" class="calc_vars" type="number" min="1" step="any">

                                    <p class="help-block help-block-error"></p>
                                </label>
                                <label class="line_labels">
                                    <span>Количество, шт.</span>
                                    <input id="count-id" class="calc_vars" type="number" min="1" step="1">

                                    <p class="help-block help-block-error"></p>
                                </label>
                            </div>
                            <div class="check_wrap">
                                <div class="col-md-6 check">
                                    <span>Постпечать:</span>

                                    <div class="checkbox_list">
                                        <input data-price="0.00" type="radio" checked class="checkbox calc_vars"
                                               id="checkbox" name="post_print"/>
                                        <label for="checkbox" class="check_label">Не обрабатывать края</label>
                                    </div>
                                    <div class="checkbox_list">
                                        <input data-price="<?= $postPrints[3]->price; ?>" type="radio"
                                               class="checkbox calc_vars" id="checkbox2" name="post_print"/>
                                        <label for="checkbox2" class="check_label">Поля по 0.1 м</label>
                                    </div>
                                    <div class="checkbox_list">
                                        <input data-price="<?= $postPrints[2]->price; ?>" type="radio"
                                               class="checkbox calc_vars" id="checkbox3" name="post_print"/>
                                        <label for="checkbox3" class="check_label">Проклейка по периметру</label>
                                    </div>
                                </div>
                                <div class="col-md-6 check">
                                    <span style="visibility:hidden;">Постпечать:</span>

                                    <div class="checkbox_list">
                                        <input data-price="<?= $postPrints[4]->price; ?>" type="radio"
                                               class="checkbox calc_vars" id="checkbox4" name="post_print"/>
                                        <label for="checkbox4" class="check_label">Обрезка в край</label>
                                    </div>
                                    <div class="checkbox_list">
                                        <input data-price="<?= $postPrints[0]->price; ?>" type="radio"
                                               class="checkbox calc_vars" id="checkbox5" name="post_print"/>
                                        <label for="checkbox5" class="check_label">Карманы по периметру</label>
                                    </div>
                                    <div class="checkbox_list">
                                        <input style="margin-right: 3px;" data-price="<?= $postPrints[1]->price; ?>" type="checkbox"
                                               class="checkbox-new  calc_vars" id="checkbox6" name="post_print"/>
                                        <label for="checkbox6" class="check_label">Люверсы по периметру</label>
                                    </div>
                                </div>
                                <div class="col-md-12 check">
                                    <div class="checkbox_list">
                                        <input style="margin-right: 3px;" type="checkbox" class="checkbox-new calc_vars" id="checkbox7"
                                               name="price_two" />
                                        <label for="checkbox7" class="check_label">Сетевые форматы</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summa">
                            <p>Стоимость заказа: <span id="all-summ">0.00</span> руб.</p>
                        </div>
                        <p style="font-size: 11px; margin-bottom: 0px; margin-top:0px;">
                            Внимание! Этот калькулятор позволит Вам рассчитать приблизительную стоимость Вашего заказа, точную стоимость можно узнать, обратившись<br/> в наш офис.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
