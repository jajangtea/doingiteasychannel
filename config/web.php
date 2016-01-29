<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'doingiteasychannel',
    'name' => 'DoingITeasyChannel',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],

    //'defaultRoute' => 'site/default',
    //'catchAll' => ['site/offline'],

    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'modelMap' => [
              'RegistrationForm' => 'app\models\RegistrationForm',
            ]
        ],
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user'
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'hJ-9k2pOTto64P9aifEYwNe0FNd5IYcG',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            // 'class' => 'yii\swiftmailer\Mailer',
            // 'transport' => [
            //     'class' => 'Swift_SmtpTransport',
            //     'host' => 'smtp.gmail.com',
            //     'username' => 'your_email_goes_here',
            //     'password' => 'your_password_goes_here',
            //     'port' => '587',
            //     'encryption' => 'tls',
            // ],
            //'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' =>[
          'enablePrettyUrl'=>'true',
          // 'showScriptName'=>'false',
          // 'rules'=>[
          //   'register' => 'user/registration/register',
          //   '<controller>s' => '<controller>/index',
          //   '<controller>/<id:\d+>' => '<controller>/view',
          //
          // ]
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
