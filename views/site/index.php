<?php $this->title = $seoSettings[0]->name; ?>
<?php $this->registerMetaTag(['name' => 'description', 'content' => $seoSettings[1]->name]); ?>
<?php $this->registerMetaTag(['name' => 'keywords', 'content' => $seoSettings[2]->name]); ?>
    <header class="top_head_wrap_main">
        <div class="fixed_top">
            <div class="top_head_wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 top_head">
                            <div class="wrap_logo">
                                <a href="/" title="<?= Yii::$app->name; ?>">
                                    <img class="logo" src="/img/logo.png" alt="<?= Yii::$app->name; ?>">
                                </a>
                            </div>
                            <div class="wrap_social">
                                <a href="http://www.icq.com/whitepages/cmd.php?uin=646156767&action=message" title="icq"><span class="icon-icq"></span></a>

                                <?php if ($socialNetworks[0]->visible == true): ?>
                                    <a href="<?= $socialNetworks[0]->link; ?>" title="<?= $socialNetworks[0]->name; ?>"><i
                                            class="fa fa-linkedin"></i></a>
                                <?php endif; ?>
                                <?php if ($socialNetworks[1]->visible == true): ?>
                                    <a href="<?= $socialNetworks[1]->link; ?>" title="<?= $socialNetworks[1]->name; ?>"><i
                                            class="fa fa-facebook-square"></i></a>
                                <?php endif; ?>
                                <?php if ($socialNetworks[2]->visible == true): ?>
                                    <a href="<?= $socialNetworks[2]->link; ?>" title="<?= $socialNetworks[2]->name; ?>"><i
                                            class="fa fa-twitter"></i></a>
                                <?php endif; ?>
                                <?php if ($socialNetworks[3]->visible == true): ?>
                                    <a href="<?= $socialNetworks[3]->link; ?>" title="<?= $socialNetworks[3]->name; ?>"><i
                                            class="fa fa-skype"></i></a>
                                <?php endif; ?>
                                <?php if ($socialNetworks[4]->visible == true): ?>
                                    <a href="<?= $socialNetworks[4]->link; ?>" title="<?= $socialNetworks[4]->name; ?>"><i
                                            class="fa fa-vk"></i></a>
                                <?php endif; ?>
                                <a href="http://novosibirsk.flamp.ru/firm/bolshojj_format_novosibirsk_ooo_reklamno_proizvodstvennaya_kompaniya-141265769951860" title="flamp"><span class="icon-flamp"></span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid top_line">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-5 email_wrap price_wrap">
                        <div class="email">
                            <a style="font-size: 14px; text-decoration: underline;" target="_blank" href="/uploads/<?= $files[0]->value; ?>">
                                <i style="color: #f24841;font-size: 20px;display: inline-block;margin-right: 10px;margin-top: 0px;position: relative;top: 4px;" class="fa fa-download"></i>скачать прайс
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-7 email_wrap email_price_wrap">
                        <div class="email">
                            <a href="mailto:office@grandformat.biz">
                                <?= str_replace('E-​mail: ', '', $contacts[3]->content); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 phone_number">
                        <div class="phone_call phone_call_a" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-phone call-icon"></i> <span class="call-text">Обратный звонок</span>
                        </div>
                        <div class="phone phone_numbers-inline">
                            <a href="tel:+7(383)218-​14-​53">+7 (383) 218-​14-​53</a>,
                            <a href="tel:+7(383)218-​15-​00">218-​15-​00</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->render('sections/_section_one', ['files' => $files]); ?>
    </header>
<?= $this->render('sections/_section_two', ['contents' => $contents]); ?>
<?= $this->render('sections/_section_three', ['printers' => $printers]); ?>
<?= $this->render('sections/_section_four', [
    'contactForm' => $contactForm,
    'postPrints' => $postPrints,
    'sourcePrints' => $sourcePrints,
    'typePrints' => $typePrints,
]); ?>
<?= $this->render('sections/_section_five', [
    'contacts' => $contacts,
    'requisites' => $requisites,
    'scripts' => $scripts,
    'backCall' => $backCall,
]); ?>
<?= $scripts[0]->content; ?>
