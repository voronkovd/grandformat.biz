<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    if (!Yii::$app->user->isGuest) {
        NavBar::begin([
            'brandLabel' => 'Большой формат',
            'brandUrl' => '/',
            'options' => [
                'class' => 'navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'encodeLabels' => false,
            'items' => [
                ['label' => 'Администрирование',
                    'url' => ['/admin/index']],
                ['label' => 'Изменить пароль',
                    'url' => ['/admin/change-password']],
                [
                    'label' => 'Выйти',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
            ],
        ]);
        NavBar::end();
    }
    ?>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<script>
    $(document).ready(function () {
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            localStorage.setItem('lastTab', $(this).attr('href'));
        });
        var lastTab = localStorage.getItem('lastTab');
        if (lastTab) {
            $('[href="' + lastTab + '"]').tab('show');
        }
    });
</script>
<?php $this->endPage() ?>
