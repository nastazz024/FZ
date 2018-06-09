<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'HpLkA8wZOoobZwtT_W3RlYsPnCochPuj',
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
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
            //
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
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                [
                    'pattern' => 'catalog/<layout:\w+>/<kind:\w+>',
                    'route' => 'site/products-catalog',
                    'defaults' => ['layout' => 'shirt', 'kind' => 'man'],
                ],
                [
                    'pattern' => 'details/<type:\w+>/<id:\d+>',
                    'route' => 'product/product-details',
                    'defaults' => [],
                ],
                [
                    'pattern' => '',
                    'route' => 'site/index',
                    'defaults' => ['layout' => 'shirt', 'kind' => 'man'],
                ],
            ],
        ],



        'shirt' => [
            'class' => 'app\Models\Shirt'
        ],
        'shirtColor' => [
            'class' => 'app\Models\ShirtColor'
        ],
        'shirtSize' => [
            'class' => 'app\Models\ShirtSize'
        ],
        'shirtCategory' => [
            'class' => 'app\Models\ShirtCategory'
        ],

        'racket' => [
            'class' => 'app\Models\Racket'
        ],

        'shuttle' => [
            'class' => 'app\Models\Shuttle'
        ],

        'short' => [
            'class' => 'app\Models\Short'
        ],

        'shortColor' => [
            'class' => 'app\Models\ShortColor'
        ],

        'racketHole' => [
            'class' => 'app\Models\RacketHole'
        ],

        'racketBalance' => [
            'class' => 'app\Models\RacketBalance'
        ],

        'shortSize' => [
            'class' => 'app\Models\ShortSize'
        ],
        'shortCategory' => [
            'class' => 'app\Models\ShortCategory'
        ],

        'racketWeight' => [
            'class' => 'app\Models\RacketWeight'
        ],

        'shoes' => [
            'class' => 'app\Models\Shoes'
        ],

        'bag' => [
            'class' => 'app\Models\Bag'
        ],

        'bagSize' => [
            'class' => 'app\Models\BagSize'
        ],

        'shoesCategory' => [
            'class' => 'app\Models\ShoesCategory'
        ],

        'shoesSize' => [
            'class' => 'app\Models\ShoesSize'
        ],

        'racketBalance' => [
            'class' => 'app\Models\RacketBalance'
        ],

        'jacket' => [
            'class' => 'app\Models\Jacket'
        ],
        'jacketColor' => [
            'class' => 'app\Models\JacketColor'
        ],
        'jacketSize' => [
            'class' => 'app\Models\JacketSize'
        ],
        'jacketCategory' => [
            'class' => 'app\Models\JacketCategory'
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
