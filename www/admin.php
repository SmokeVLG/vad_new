<?php
header('Content-Type: text/html; charset=UTF-8',true);
date_default_timezone_set('Europe/Moscow');

//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', 1);

require_once 'lib/functions.php';

// change the following paths if necessary
$yii=dirname(__FILE__).'/YII_1_1_9/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);

Yii::createWebApplication($config)->runEnd('backend');