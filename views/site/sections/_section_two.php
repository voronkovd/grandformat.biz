<section class="about_us">
    <div class="container">
        <div class="row">
            <div class="col-md-12 about">
                <div class="col-md-9">
                    <h1>Широта нашего формата<br/> определяется только вашими задачами</h1>
                </div>
                <div class="col-md-3 result" style="padding-right: 0px;font-size: 50px;">
                    <p style="font-size: 16px; line-height: 1.4;font-family: HeliosC, sans-serif;">За 6 лет работы<br/>мы напечатали</p>
                    <span style="font-size: 110px;color: #48423b;line-height: 0.8;font-weight: bolder;font-family: HeliosCondBlackC;">6,4</span> км&#178;
                    <p style="font-size: 16px; line-height: 1.4;font-family: HeliosC, sans-serif;">рекламных поверхностей,<br/>что равно площади Центрального<br/> района г. Новосибирска.</p>
                </div>
            </div>
            <div class="col-md-12 items_wrap">
                <?php if (!empty($contents)): ?>
                    <?php foreach ($contents as $content): ?>
                        <div class="col-md-3 items">
                            <h2><?= $content->title; ?></h2>

                            <p><?= $content->content; ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <div class="col-lg-4 col-md-4 button_wrap">
                    <button onclick="scroll_send_section();" class="button_style scroll-send-section">оформить заказ</button>
                </div>
            </div>
        </div>
    </div>
</section>