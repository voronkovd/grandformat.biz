<br>
<div class="row">
    <div class="col-md-6">
        <?= $this->render('default/_seo', ['seoSettings' => $seoSettings]); ?>
        <?= $this->render('default/_script', ['scripts' => $scripts]); ?>
    </div>
    <div class="col-md-6">
        <?= $this->render('default/_social', ['socialNetworks' => $socialNetworks]); ?>
        <?= $this->render('default/_file', ['files' => $files]); ?>
    </div>
</div>