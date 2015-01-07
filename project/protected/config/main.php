<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
        'name' => 'showplus面膜-后台系统',
        'language'=>'zh_cn',
        'defaultController' => 'home',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
        'application.models.data.*',
		'application.components.*',
        'application.components.userware.*',
        'application.components.rbac.*',
        'application.components.lib.*'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                        'loginUrl'=>array('admincontent/index'),
		        ),
                'session' => array(
                    'autoStart' => true,
                ),
                'request'=>array(  
                    // Enable Yii Validate CSRF Token
                    'enableCsrfValidation' => true,
                    'class'=>'HttpRequest',
                    'noCsrfValidationRoutes'=>array(
                        'admincontent','adminhomeset'
                    ),
                    'csrfTokenName'=>'csrf_token'
                ),  
		// uncomment the following to enable URLs in path-format
                'urlManager' => array(
                    'urlFormat' => 'path',
                    'caseSensitive' => True,
                    'rules' => array(
                        '<controller:\w+>/<id:\d+>' => '<controller>/view',
                        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                    ),
                ),
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=test',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'xoyo.com',
			'charset' => 'utf8',
		),
        // 基于角色的用户权限认证配置
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'defaultRoles' => array('guest'),
            'itemTable' => 'Authitem',
            'itemChildTable' => 'Authitemchild',
            'assignmentTable' => 'Authassignment',
        ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			//'errorAction'=>'site/error',
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
		'account_url'=>'http://10.221.8.154/web/index.php',
                'filetmpcache'=>'upload',
                'alipay_config'=>array(
                    'partner'=>'',
                    'key'=>'',
                    'sign_type'=>strtoupper('MD5'),
                    'input_charset'=>strtolower('utf-8'),
                    'cacert'=>getcwd().'\\cacert.pem',
                    'transport'=>'http', 
                )
	),
);