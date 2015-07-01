<?php
defined ( 'DS' ) or define ( 'DS', DIRECTORY_SEPARATOR );
defined ( 'HOSTINGPRESS_ROOT' ) or define ( 'HOSTINGPRESS_ROOT', DS . 'var' . DS . 'www' . DS . 'yourdomain.com' . DS . 'public_html' . DS );

require (HOSTINGPRESS_ROOT . 'vendor' . DS . 'autoload.php');
require (HOSTINGPRESS_ROOT . 'vendor' . DS . 'yiisoft' . DS . 'yii2' . DS . 'Yii.php');

$config = require (HOSTINGPRESS_ROOT . 'config' . DS . 'web.php');

new yii\web\Application ( $config );
if (! $site = Yii::$app->wordpress->check ( PHP_SAPI != 'cli' )) {
	Yii::$app->wordpress->notFound ();
}