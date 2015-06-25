<?php
defined ( 'HOSTINGPRESS_ROOT' ) or define ( 'HOSTINGPRESS_ROOT', '/var/www/yourdomain.com/public_html/' );

require (HOSTINGPRESS_ROOT . 'vendor/autoload.php');
require (HOSTINGPRESS_ROOT . 'vendor/yiisoft/yii2/Yii.php');

$config = require (HOSTINGPRESS_ROOT . 'config/web.php');

$yii = new yii\web\Application ( $config );
if (! $site = Yii::$app->wordpress->check ()) {
	Yii::$app->wordpress->notFound ();
}