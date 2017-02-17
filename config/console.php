<?php
return [
    'id' => 'basic.yii',
    'basePath' => realpath(__DIR__.'/../'),
    'components' => [
        'db' => require(__DIR__ . '/db.php'),
    ],
];
