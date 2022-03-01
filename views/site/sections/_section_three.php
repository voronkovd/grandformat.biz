<?php if (!empty($printers)): ?>
    <section class="img_items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 all_items">
                    <?php foreach ($printers as $printer): ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="this_item">
                                <div class="photo">
                                    <a target="_blank" href="/uploads/<?= $printer->desc; ?>">
                                    <img src="/uploads/<?= $printer->image; ?>" alt="<?= $printer->title; ?>">
                                        </a>
                                </div>
                                <div class="content" style="    text-transform: none;">
                                    <h3><?= $printer->title; ?></h3>
                                    <?php if (!empty($printer->document)): ?>
                                        <a target="_blank" href="/uploads/<?= $printer->document; ?>">Технические требования к макетам</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>