<?php
use yii\helpers\Html;

$this->title = $exception->statusCode;
?>
<div class="row">
    <div class="col-md-12 text-center">
        <h1><?= Html::encode((int)($this->title)) ?></h1>
        <?= nl2br(Html::encode($message)) ?>
    </div>
</div>
