<?php
	//if there is no constant defined called __COINFIG__, do not load this file
	if(!defined('__CONFIG__')){
		exit('you do not have a config file');
	}
	//allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');
	include_once "classes/DB.php";
	include_once "classes/Filter.php";
	// our config is bellow
	$con = DB::getConnection();
?>