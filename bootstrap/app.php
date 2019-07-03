<?php

if (version_compare(PHP_VERSION, '7.1.3', '<')) {
    die('require PHP > 7.1.3 !');
}

/*
|--------------------------------------------------------------------------
| Setting Version
|--------------------------------------------------------------------------
|
*/

define('APPNAME', 'Yii');
define('VERSION', '1.0.0-dev');
define('RELEASE', '20190701');
define('ADMIN_PATH', 'admin');

/*
|--------------------------------------------------------------------------
| Setting Debuger
|--------------------------------------------------------------------------
|
*/

if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    defined('YII_DEBUG') or define('YII_DEBUG', false);
    defined('YII_ENV') or define('YII_ENV', 'prod');
} else {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
}

/*
|--------------------------------------------------------------------------
| Loading Kernel
|--------------------------------------------------------------------------
|
*/

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

/*
|--------------------------------------------------------------------------
| Loading Bootstrap
|--------------------------------------------------------------------------
|
*/

require(__DIR__ . '/../config/bootstrap.php');

/*
|--------------------------------------------------------------------------
| Loading Configuration
|--------------------------------------------------------------------------
|
*/

$config = require(__DIR__ . '/../config/web.php');

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return new yii\web\Application($config);
