<?php

class DB{
	public static function getConnection(){
		$parameters = include(DIRNAME.'config/db_pamaters.php');

		$fp = "mysql:host={$parameters['host']};dbname={$parameters['dbname']}";
		$db = new PDO($fp,$parameters["user"],$parameters["pass"]);

		return $db;
	}
}

?>