<?php if (Yii::$app->session->hasFlash('seo_update')): ?>

    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        "Сео Настройки" успешно изменены!
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('social_update')): ?>

    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        "Социальные сети" успешно изменены!
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('file_update')): ?>

    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        "Файлы" успешно изменены!
    </div>
<?php endif; ?>