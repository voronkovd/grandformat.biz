<?php $this->title = 'Администрирование'; ?>
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#default" aria-controls="default" role="tab" data-toggle="tab">Основные</a>
    </li>
    <li role="presentation">
        <a href="#contents" aria-controls="contents" role="tab" data-toggle="tab">Контент</a>
    </li>
    <li role="presentation">
        <a href="#printer" aria-controls="printer" role="tab" data-toggle="tab">Печать</a>
    </li>
    <li role="presentation">
        <a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab">Реквизиты и Контакты</a>
    </li>
    <li role="presentation">
        <a href="#calculate" aria-controls="calculate" role="tab" data-toggle="tab">Калькулятор</a>
    </li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="default">
        <?= $this->render('_default',
            [
                'scripts' => $scripts,
                'seoSettings' => $seoSettings,
                'socialNetworks' => $socialNetworks,
                'files' => $files
            ]); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="contents">
        <div role="tabpanel" class="tab-pane" id="default">
            <?= $this->render('_contents', ['contents' => $contents]); ?>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="printer">
        <div role="tabpanel" class="tab-pane" id="printer">
            <?= $this->render('_printers', ['printers' => $printers]); ?>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="contacts">
        <div role="tabpanel" class="tab-pane" id="default">
            <?= $this->render('_contacts', ['contacts' => $contacts, 'requisites' => $requisites]); ?>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="calculate">
        <div role="tabpanel" class="tab-pane" id="default">
            <?= $this->render('_calculates', ['typePrints' => $typePrints, 'sourcePrints' => $sourcePrints, 'postPrints' => $postPrints]); ?>
        </div>
    </div>
</div>