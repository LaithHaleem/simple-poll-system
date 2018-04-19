<?php

 // Start Session
 session_start();

 //Globals Dependencies
 $GLOBALS['Config'] = array(
 	'db' => array(
 		'host' => 'localhost',
 		'name' => 'antkhabat',
 		'user' => 'root',
 		'pass' => 'hhhssslllaaa'
 	),
 	'GPATH' => realpath(__DIR__) . '\\'
 );

 //Autoload All Classes
 spl_autoload_register(function($class) {
 	require 'app/classes/' . $class . '.class.php';
 });