<?php
	foreach(glob(DIRNAME.'model/*.php') as $file) { require_once($file);}
	foreach (glob(DIRNAME.'components/*.php') as $file) { require_once($file);}

	function uri(){
		echo 'http://beejee/';
	}

	function page404(){
		header("Location:/");
	} 
	

?>