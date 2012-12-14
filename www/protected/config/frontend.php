<?php

return CMap::mergeArray(

        
    require_once(dirname(__FILE__).'/main.php'),
    
    array(
               
          
        // стандартный контроллер
        'defaultController' => 'site',
        
        'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'Система учета дорожных работ ОГУП Волгоградавтодор',

        'language' => 'ru',
            
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
			'ipFilters'=>array('127.0.0.1', '::1', '192.168.0.101', '192.168.0.83', '192.168.0.56', '192.168.0.61'),
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
		// пользователь
            'user'=>array(
                'loginUrl'=>array('/users/login'),
                'class' => 'WebUser',
               // 'allowAutoLogin'=>true,
               // 'allowAutoLogin'=>true,
      
            ),
                      'image'=>array(
            'class'=>'ext.image.ImageComponent',
            'driver'=>'Gd',
        ),
            

  		// mailer
  		'mailer'=>array(
    		'pathViews' => 'application.views.frontend.email',
    		'pathLayouts' => 'application.views.email.frontend.layouts'
  		),
            
            
            
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
		// uncomment the following to use a MySQL database
	
            
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
        
        
               
   )
);
?>
