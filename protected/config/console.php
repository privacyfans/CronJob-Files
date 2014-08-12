<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	'import'=>array(
			'ext.YiiMailer.YiiMailer',
		),
	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		'mail' => array(
			'class' => 'ext.yii-mail.YiiMail',
			 'transportType'=>'smtp',
			 'transportOptions'=>array(
			   /*'host'=>'mail.banksaudara.com',
			   'username'=>'irfan.luthfi@banksaudara.com',//contohna nama_email@yahoo.co.id
			   'password'=>'saudara1906',
			   'port'=>'465',
			   'encryption'=>'ssl',*/
                'host'=>'smtp.gmail.com',
                'username'=>'privacyfans1990@gmail.com',//contohna nama_email@yahoo.co.id
                'password'=>'achongxxx199003',
                'port'=>'465',
                'encryption'=>'ssl',
			 ),
			'viewPath' => 'application.views.mail',
			'logging' => true,
			'dryRun' => false
		),
		
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