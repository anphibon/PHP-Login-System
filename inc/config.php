<?php
	//if there is no constant defined called __COINFIG__, do not load this file
	if(!defined('__CONFIG__')){
		exit('you do not have a config file');
	}
	if(!isset($_SESSION)){
		session_start();
	
	}
	//allow errors
	error_reporting(-1);
	ini_set('display_errors', 'On');
	include_once "classes/DB.php";

	include_once "classes/Filter.php";
	include_once "functions.php";
	// our config is bellow
	$con = DB::getConnection();
	
	if(isset($_SESSION['user_id'])){
		include_once "classes/GoldbergDB.php";
		
	}

	

?>