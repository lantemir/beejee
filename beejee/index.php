<?php 
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	define('DIRNAME', dirname(__FILE__).'/');

	session_start();

	require_once(DIRNAME.'functions/main.php');

	$router = new Router;
	$router->run();

?>