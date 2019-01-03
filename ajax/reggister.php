<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "../inc/config.php"; 


	header('Content-Type: application/json');
	$array = ['test1', 'test2', 'test3'];

	echo json_encode($array, JSON_PRETTY_PRINT);
	echo "array";
?>
