<?php
return [
    'class' => 'yii\swiftmailer\Mailer',
    'useFileTransport' => false,
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.gmail.com',
        'username' => 'test@gmail.com',
        'password' => 'test123',
        'port' => '587',
        'encryption' => 'tls',
    ],
];