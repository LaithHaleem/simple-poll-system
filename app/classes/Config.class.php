<?php
 
 class Config {

 	//Dynamic Function To Get Contents Of GLOBALS Array Depending Of Path
 	public static function Get($path = null) {
 		$config = $GLOBALS['Config'];
 		if($path) {
 			$path = explode('/', $path);
 			foreach ($path as $bit) {
 				if($config[$bit]) {
 					$config = $config[$bit];
 				}
 			}
 			return $config;
 		}
 		return false;
 	}
 	
 }