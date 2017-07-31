<?php
use common\languages\Languages;

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'language' =>'ru',
    'sourceLanguage' => 'ru', // использован в качестве ключей переводов
    'bootstrap' => ['log'],

    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'forceTranslation' => true,
                    'basePath' => '@common/messages',
                ],
            ],
        ],

        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
              //  '<lang:' . Languages::$url_language . '>/' => 'site/index',
                '<lang:' . Languages::$url_language . '>/'=>'site/index',
               // '<lang:' . Languages::$url_language . '>/login' => 'site/login',
                '<lang:' . Languages::$url_language . '>/<controller>/<action>/<id:\d+>/<title>' => '<controller>/<action>',
                '<lang:' . Languages::$url_language . '>/<controller>/<id:\d+>/<title>' => '<controller>/index',
                '<lang:' . Languages::$url_language . '>/<controller>/<action>/<id:\d+>' => '<controller>/<action>',
                '<lang:' . Languages::$url_language . '>/<controller>/<action>' => '<controller>/<action>',
                '<lang:' . Languages::$url_language . '>/<controller>' => '<controller>',

                '<lang:' . Languages::$url_language . '>/page-<page:\d+>/' => 'post/index',
                '<lang:' . Languages::$url_language . '>/' => 'post/index',

                [
                    'pattern'=> '<lang:' . Languages::$url_language . '>/<url\w+>',
                    'route' => 'post/view',
                    'suffix' => '.html',
                ],

               // '<lang:' . Languages::$url_language . '>/<action:(contact|login|logout|language|about|signup)>' => 'site/login<action>',
            ],
        ],

    ],
    'params' => $params,
    'on beforeRequest' => function () {
        (new common\languages\Languages())->run();
    },


];
