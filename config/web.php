<?php
return [
    'id' => 'basic.yii',
    'basePath' => realpath(__DIR__.'/../'),
    'components' => [
        'request' => [
                'cookieValidationKey' => '53178021501825701235',
        ],
        'urlManager' => [
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true,
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module'
        ],
        'crud' => [
            'class' => 'app\modules\crud\Crud',
        ],
    ]
];
