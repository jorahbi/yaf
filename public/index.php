<?php

define('APPLICATION_PATH', dirname(dirname(__FILE__)));
\Yaf\Loader::import(APPLICATION_PATH . '/vendor/autoload.php');
$application = new \Yaf\Application( APPLICATION_PATH . '/conf/application.ini');

$application->bootstrap()->run();
?>
