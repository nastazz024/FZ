<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$mailer = require __DIR__ . '/mailerParams.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'language' => 'en-US',
            'i18n' => [
                'translations' => [
                    'app*' => [
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => '@app/messages',
                        'sourceLanguage' => 'ru-RU',
                    ],
                ],
            ],
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
        'mailer' => $mailer,
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

                [
                    'pattern' => 'league',
                    'route' => 'site/league',
                ],

                [
                    'pattern' => 'contact',
                    'route' => 'site/contact',
                ],

                [
                    'pattern' => 'event',
                    'route' => 'site/event',
                ],

                [
                    'pattern' => 'tour/view/<id:\d+>',
                    'route' => 'tour/view',
                ],


                // admin tournament
                [
                    'pattern' => 'tournament',
                    'route' => '404',
                ],
                [
                    'pattern' => 'admin/tournaments',
                    'route' => 'tournament',
                ],
                [
                    'pattern' => 'admin/tournaments/<action>',
                    'route' => 'tournament/<action>',
                ],
                [
                    'pattern' => 'admin/tournament/<action>',
                    'route' => 'tournament/<action>',
                ],

                [
                    'pattern' => 'player',
                    'route' => '404',
                ],
                [
                    'pattern' => 'admin/players',
                    'route' => 'player',
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
        'shirtCount' => [
            'class' => 'app\Models\ShirtCount'
        ],
        'shirtCategory' => [
            'class' => 'app\Models\ShirtCategory'
        ],

        'racket' => [
            'class' => 'app\Models\Racket'
        ],

        'racketCount' => [
            'class' => 'app\Models\RacketCount'
        ],

        'shuttle' => [
            'class' => 'app\Models\Shuttle'
        ],

        'short' => [
            'class' => 'app\Models\Short'
        ],
        'shortCount' => [
            'class' => 'app\Models\ShortCount'
        ],

        'racketAccs' => [
            'class' => 'app\Models\RacketAccs'
        ],

        'accs' => [
            'class' => 'app\Models\Accs'
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

        'shoesCount' => [
            'class' => 'app\Models\ShoesCount'
        ],

        'bag' => [
            'class' => 'app\Models\Bag'
        ],
        'bagCount' => [
            'class' => 'app\Models\BagCount'
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
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
