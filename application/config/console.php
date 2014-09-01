<?php
Yii::setPathOfAlias('base', dirname(__FILE__) . '/../../');
// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'My Console Application',

    // preloading 'log' component
    'preload'           => defined('YII_DEBUG')
        && YII_DEBUG
        && is_writable(Yii::getPathOfAlias('base').'/resources/runtime')
        && is_writable(Yii::getPathOfAlias('public.assets'))
            ? array('debug','log') : array(),
    'runtimePath' => Yii::getPathOfAlias('base').'/resources/runtime/',

    // application components
    'components'=>array(
        'db' => file_exists(__DIR__ . '/db.php') ? require_once __DIR__ . '/db.php' : require_once __DIR__.'/db.simple.php',
        // uncomment the following to use a MySQL database
        /*
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=testdrive',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        */
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'error, warning',
                ),
            ),
        ),
    ),
);