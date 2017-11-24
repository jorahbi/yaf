<?php

define('APPLICATION_PATH', dirname(dirname(__FILE__)));
define('APP_ENVIRON', ini_get('yaf.environ'));
\Yaf\Loader::import(APPLICATION_PATH . '/vendor/autoload.php');
$application = new \Yaf\Application( APPLICATION_PATH . '/conf/application.ini', APP_ENVIRON);

$application->bootstrap()->run();
?>
