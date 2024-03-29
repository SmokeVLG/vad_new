<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	
   
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'Система учета дорожных работ ОГУП Волгоградавтодор',
'language' => 'ru',
    // используемые приложением поведения
    'behaviors'=>array
        (
        'runEnd'=>array
            (
            'class'=>'application.behaviors.WebApplicationEndBehavior',
            ),
       ),
    
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.PHPPDO.*',
	),
        
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'ipFilters'=>array('192.168.0.159','::1'),
                        'ipFilters'=>array('192.168.0.56','::1'),
                    'ipFilters'=>array('192.168.0.61','::1'),
		),
		
	),

	// application components
	'components'=>array(
            
            'simpleImage'=>array(
                        'class' => 'application.extensions.CSimpleImage',
                ),
            'image'=>array(
          'class'=>'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver'=>'GD',
            // ImageMagick setup path
            'params'=>array('directory'=>'/opt/local/bin'),
        ),
		'user'=>array(
			// enable cookie-based authentication
			//'allowAutoLogin'=>true,
            'class' => 'WebUser',
		),
             'image'=>array(
            'class'=>'ext.image.ImageComponent',
            'driver'=>'Gd',),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(

			
			'connectionString' => 'mysql:host=localhost;dbname=vadn',
			'emulatePrepare' => true,
				
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',            
		),
		
            
            
            
        'authManager' => array(
			// Будем использовать свой менеджер авторизации
            'class' => 'PhpAuthManager',
            // Роль по умолчанию. Все, кто не админы, модераторы и юзеры — гости.
            'defaultRoles' => array('guest'),
        ),
            
        'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);