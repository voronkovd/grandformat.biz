<div class="container-fluid"
     style="background-image: url('/img/bg_top_main.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 bg_top_wrap no-left-right-padding">
                <div class="col-lg-5 col-md-4 top_heading">
                    <h1>Широкоформатная печать <br />в Новосибирске</h1>
                    <ul class="list-styled">
                        <li>Низкие цены</li>
                        <li>Оперативность</li>
                        <li>Большой парк оборудования</li>
                        <li>Круглосуточное производство</li>
                        <li>Изготовление цветопроб - бесплатно</li>
                        <li>Бесплатная доставка по Новосибирску</li>
                    </ul>
                    <div class="button_wrap top_otstyp">
                        <button onclick="scroll_send_section();" class="button_style scroll-send-section">оформить заказ</button>
                    </div>
                </div>
                <?php if (!empty($files[1]) and !empty($files[1]->value)): ?>
                    <div class="img_wrap" style="padding: 31px 10px 0 0;"><img src="/uploads/<?= $files[1]->value; ?>" alt="<?= Yii::$app->name; ?>">
                    </div>
                <?php else: ?>
                    <div class="img_wrap" style="padding: 31px 10px 0 0;"><img src="/img/top_banner.png" alt="<?= Yii::$app->name; ?>"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>