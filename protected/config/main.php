<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Intensive Care Coordinator & Monitoring Unit',

	// preloading 'log' component
	'preload'=>array(
	    'log',
        'bootstrap',
	    'less'
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.rights.*',
		'application.modules.rights.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
	    'application.extensions.CAdvancedArBehavior',
	),

	'modules'=>array(
		'dashboard',
	    'user'=>array(
            'tableUsers' => 'users',
            'tableProfiles' => 'profiles',
            'tableProfileFields' => 'profiles_fields',
        ),
		'rights'=>array(
			'install'=>false, // Enables the installer.
			'superuserName'=>'Admin',
		    'appLayout'=>'application.views.layouts.admin'
		),

	    // uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
            'generatorPaths'=>array(
    		    'bootstrap.gii', // since 0.9.1
    		),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			'class'=>'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		    'loginUrl' => array('/user/login'),
		),
	    
	    'authManager'=>array(
			'class'=>'RDbAuthManager', // Provides support authorization item sorting.
		),
        
		'urlManager'=>array(
			'urlFormat'=>'path',
#			'caseSensitive'=>false,
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=iccmu',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '111111',
			'charset' => 'utf8',
		    'tablePrefix'=>'',
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
	  
   	    'bootstrap'=>array(
    	    'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
   	        'responsiveCss'=>true,
   	    ),
	  
    	'less'=>array(
    	    'class'=>'ext.less.components.LessCompiler',
    	    'forceCompile'=>false, // indicates whether to force compiling
    	    'paths'=>array(
    	      'less/style.less'=>'css/style.css',
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
