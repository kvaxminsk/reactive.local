<?php

$params = require(__DIR__ . '/params.php');

$basePath =  dirname(__DIR__);
$webroot = dirname($basePath);

Yii::setAlias('@uploads', $webroot . DIRECTORY_SEPARATOR . 'uploads');

$config = [
    'id' => 'app',
    'basePath' => $basePath,
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'runtimePath' => $webroot . '/runtime',
    'vendorPath' => $webroot . '/vendor',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Pd8qOX0oWlO3vbIEtQjrEatmNnPb2Tx9',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],
        'assetManager' => [
            // uncomment the following line if you want to auto update your assets (unix hosting only)
            'linkAssets' => true,
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,   // отключение дефолтного jQuery
                    'js' => [
                        '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', // добавление вашей версии
                    ]
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [YII_DEBUG ? 'css/bootstrap.css' : 'css/bootstrap.min.css'],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => [YII_DEBUG ? 'js/bootstrap.js' : 'js/bootstrap.min.js'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

//                '/'=>'/main/index',
//                'about_us'=>'/main/about-us',
//                'our_pharmacy'=>'/main/our-pharmacy',
//                'single_pharmacy'=>'/main/single-pharmacy',
//                'single_news'=>'/main/single-news',
//                'vacansy'=>'/main/vacansy',
                'contacts'=>'/site/contacts',
                'contact'=>'/site/contact',
//                'partners'=>'/main/partners',
//                'news'=>'/main/news',
//                'pharmacy_map'=>'/main/pharmacy-map',
//                'stocks'=>'main/stocks',
//                'single_stocks'=>'/main/single-stocks',
//                'contactform'=>'/main/contact',
//                '' => '/main/index',

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
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
    
    $config['components']['db']['enableSchemaCache'] = false;
}

return array_merge_recursive($config, require(dirname(__FILE__) . '/../../vendor/noumo/easyii/config/easyii.php'));
