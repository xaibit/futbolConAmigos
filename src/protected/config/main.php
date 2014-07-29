<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Palpito Futbolero',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'passw0rd',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),
	'language'=>'es',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		// uncomment the following to use a MySQL database
		'mail' => array(
			  'class' => 'ext.mail.YiiMail',
			  'transportType' => 'smtp',
			  'transportOptions'=>array(
				'host'=>'smtp.gmail.com',
				'encryption'=>'ssl', // use ssl
				'viewPath' => 'application.views.mail',
				'logging' => true,
				'dryRun' => false
		   ),
	   ),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=futbolconamigos',
			'emulatePrepare' => true,
			'username' => 'adminmundial',
			'password' => 'mUnD1aL',
			'charset' => 'utf8',
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
		'coreMessages'=>array(
				'basePath'=>null
		),
		'widgetFactory' => array(
				'widgets' => array(
						'CLinkPager' => array(
								'header' => '',
								'footer' => '',
								'nextPageLabel' => '>>',
								'prevPageLabel' => '<<',
								'selectedPageCssClass' => 'active',
								'hiddenPageCssClass' => 'disabled',
								'htmlOptions' => array(
										'class' => 'pagination'
								),
								'internalPageCssClass'=>''
						),
						'CListView'=>array(
								'itemsCssClass'=>'list-group',
								'summaryText'=>'Mostrando {start} - {end} de {count}',
								'emptyText'=>'No se encontraron resultados',
								'pagerCssClass'=>'pagination'
						),
						'CGridView'=>array(
								'itemsCssClass'=>'table table-striped table-bordered',
								'summaryText'=>'Mostrando {start} - {end} de {count}',
								'emptyText'=>'No se encontraron resultados',
								'pagerCssClass'=>'pagination',
								'cssFile'=>false
						)
				)
		)
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);