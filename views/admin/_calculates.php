<br>
<div class="row">
    <div class="col-md-6">
        <?= $this->render('calculates/_type', ['typePrints' => $typePrints]); ?>
        <?= $this->render('calculates/_post', ['postPrints' => $postPrints]); ?>
    </div>
    <div class="col-md-6">
        <?= $this->render('calculates/_source', ['sourcePrints' => $sourcePrints]); ?>
    </div>
</div>