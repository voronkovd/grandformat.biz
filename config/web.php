<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'big_format',
    'name' => 'Большой формат',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'components' => [
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'linkAssets' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'fs42bDtcjxgy_afGAeA61ZASzwOynicT',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => require(__DIR__ . '/mail.php'),
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/new',
                'baseUrl' => '@web/themes/new',
                'pathMap' => [
                    '@app/views' => '@app/themes/new',
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
