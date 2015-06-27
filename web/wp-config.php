<?php
require dirname ( __DIR__ ) . DIRECTORY_SEPARATOR . 'hostingpress.php';

define ( 'DB_NAME', $site->DB_NAME );
define ( 'DB_USER', $site->DB_USER );
define ( 'DB_PASSWORD', $site->DB_PASSWORD );
define ( 'DB_HOST', $site->DB_HOST );
define ( 'DB_CHARSET', $site->DB_CHARSET );
define ( 'DB_COLLATE', $site->DB_COLLATE );
define ( 'AUTH_KEY', $site->AUTH_KEY );
define ( 'SECURE_AUTH_KEY', $site->SECURE_AUTH_KEY );
define ( 'LOGGED_IN_KEY', $site->LOGGED_IN_KEY );
define ( 'NONCE_KEY', $site->NONCE_KEY );
define ( 'AUTH_SALT', $site->AUTH_SALT );
define ( 'SECURE_AUTH_SALT', $site->SECURE_AUTH_SALT );
define ( 'LOGGED_IN_SALT', $site->LOGGED_IN_SALT );
define ( 'NONCE_SALT', $site->NONCE_SALT );
$table_prefix = $site->DB_PREFIX;
define ( 'WP_DEBUG', false /* $site->WP_DEBUG */ );
if (! defined ( 'ABSPATH' ))
	define ( 'ABSPATH', dirname ( __FILE__ ) . DS );
if (! defined ( 'UPLOADS' ))
	define ( 'UPLOADS', 'wp-content' . DS . 'uploads' . DS . $site->domain );
Yii::$app = null;
require_once (ABSPATH . 'wp-settings.php');
