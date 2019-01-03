<?php
	//if there is no constant defined called __COINFIG__, do not load this file
	if(!defined('__CONFIG__')){
		exit('you do not have a config file');
	}
	include_once "classes/DB.php";
	// our config is bellow
	$con = DB::getConnection();
?>