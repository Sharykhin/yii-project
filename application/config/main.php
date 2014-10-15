<?php
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('base', dirname(__FILE__) . '/../../');
Yii::setPathOfAlias('public', dirname(__FILE__) . '/../../public/');


return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'charset'           => 'UTF-8',
    'language'          => 'ru',
    'sourceLanguage'    => 'en',
	'name'=>'Yii Box',

	// preloading 'log' component
    'preload'           => defined('YII_DEBUG')
                            && YII_DEBUG
                            && is_writable(Yii::getPathOfAlias('base').'/resources/runtime')
                            && is_writable(Yii::getPathOfAlias('base').'/public/assets')
                                ? array('debug','log') : array(),
    'runtimePath' => Yii::getPathOfAlias('base').'/resources/runtime/',

    'aliases' => array(
        'application'=>dirname(__FILE__) . '/../',
        'vendor'=>dirname(__FILE__) . '/../../vendor/',
        'bootstrap' => realpath(__DIR__ . '/../../vendor/crisu83/yiistrap'), // change this if necessary
    ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.admin.components.*',
        'bootstrap.helpers.TbHtml'
	),
	'modules'=>array(

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
            'generatorPaths'=>array(
                'bootstrap.gii'
            ),
			'password'=>'123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
        'admin'=>array(
            'class'=>'application.modules.admin.AdminModule'
        ),
        'users'=>array(
            'class'=>'application.modules.users.UsersModule'
        ),
        'pages'

	),
   	// application components
	'components'=>array(
        'debug' => array(
//            'class'   => 'core.yii2-debug.Yii2Debug',
            'class'=>'vendor.zhuravljov.yii2-debug.Yii2Debug'
        ),
        'assetManager'=>array(
            'basePath'=>Yii::getPathOfAlias('public').'/assets',
            'baseUrl'=>'/public/assets'
        ),
        'bootstrap'=>array(
            'class'=>'bootstrap.components.TbApi'
        ),
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
            'class' => 'WebUser',
            'loginUrl'=>array('/admin'),
        ),

        'authManager' => array(
            // Будем использовать свой менеджер авторизации
            'class' => 'PhpAuthManager',
            // Роль по умолчанию. Все, кто не админы, модераторы и юзеры — гости.
            'defaultRoles' => array('ROLE_GUEST'),
        ),

		'urlManager'=>file_exists(__DIR__ . '/urlManager.php') ? require_once __DIR__ . '/urlManager.php' : array(),


        'db' => file_exists(__DIR__ . '/db.php') ? require_once __DIR__ . '/db.php' : require_once __DIR__.'/db.simple.php',

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),//end errorHandler
        'log' => array(
            'class'  => 'CLogRouter',
            'routes' => array(
                array(
                    'class'  => 'CFileLogRoute',
                    'levels' => 'error, warning, info, trace', // на продакшн лучше оставить error, warning
                ),
            ),
        ),

        //Заменить компонент если решите использовать другую профилирующую панель.
        //ВНИМАНИЕ!!! Текущая профилирующая панель отключит панель компннента debug

//		'log'=>array(
//			'class'=>'CLogRouter',
//			'routes'=>array(
//				array(
//					'class'=>'vendor.malyshev.yii-debug-toolbar.YiiDebugToolbarRoute',
//					'ipFilters'=>array('127.0.0.1','192.168.1.215'),
//				),
//            ),//end log->routers
//		),//end log

	),// end components

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);