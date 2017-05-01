<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
	'name' => 'Omega',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'timezone' => 'Asia/Kolkata',
    'components' => [
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'nullDisplay' => '',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'xyctuyvibonp',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\MstUsers',
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
            'useFileTransport' => false,
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => '203.199.234.99',
				'username' => '',
				'password' => '',
				'port' => '25',
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
//        'db' => DatabaseConfig::getLocalDbConnection(),
        'db' => DatabaseConfig::getLiveDbConnection(),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],*/
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			// Disable index.php
			'showScriptName' => false,
			// Disable r= routes
			'enablePrettyUrl' => false,
			'rules' => array(
			   	'<controller:\w+>/<id:\d+>' => '<controller>/view',
          			'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
          			'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
        ],
        'view' => [
			 'theme' => [
				 'pathMap' => [
					'@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
				 ],
			 ],
		],
        'common' => [
            'class'=>'app\components\CommonComponent',
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en_US',
                ],
            ]
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '172.30.3.42',
            'port' => 6379,
            'database' => 0,
        ],
	],
    /*'as beforeRequest' => [
        'class' => 'yii\filters\AccessControl',
        'rules' => [
            [
                //'actions' => [ 'error'],
                //'actions' => ['login', 'error', 'get-all-buildings', 'get-floors-buildings', 'get-rooms-by-floor', 'get-beds-by-room-id'],
                'allow' => true,
            ],
            [

                'allow' => true,
                'roles' => ['@'],
            ],
        ],
        'denyCallback' => function () {
            return Yii::$app->response->redirect(['site/login']);
        },
    ],*/
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
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
    $config['modules']['gridview'] = [ 'class' => '\kartik\grid\Module' ];
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
