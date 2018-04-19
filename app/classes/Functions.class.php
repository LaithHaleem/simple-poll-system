<?php

 class Functions {

 	//Dynamic Function To Autoload And Scripts Or Style File
 	public static function LoadFiles($dir) {
 		$banlist = array('.', '..');
 		if(is_dir($dir)) {
 			$dircontent = scandir($dir);
 			rsort($dircontent); // Reverse Array Contents To Good Loading
 			foreach ($dircontent as $file) {
 				if(!in_array($file, $banlist)) {
 					$filetype = end(explode('.', $file));
 					if($filetype === 'css') {
 						echo "<link rel='stylesheet' type='text/css' href='". $dir . '/'. $file ."'>\r\n";
 					}elseif($filetype === 'js') {
 						echo "<script src='". $dir . '/' . $file ."'></script>\r\n";
 					}
 				}
 			}
 		}
 	}

 	//Dynamic Function To Require Spciefic Part 
 	public static function Inc($part) {
 		$realpath = realpath($part);
 		if($realpath) {
 			if(file_exists($realpath)) {
 				require $realpath;
 			}
 		}
 	}

 	//Dynamic Function To Check Request If Existis
 	public static function CheckRequest($rqname) {
 		if(isset($_REQUEST[$rqname]) && !empty($_REQUEST[$rqname])) {
 			return true;
 		}
 		return false;
 	}

 	//Dynamic Function To Get Request With It Value
 	public static function GetRequest($rqname) {
 		if(self::CheckRequest($rqname)) {
 			return $_REQUEST[$rqname];
 		}
 	}

 	//Dynamic Function To Set Cooike
 	public static function CookieSet($cookname, $expire = string) {
 		$expiry = array(
 			'day' => (86400),
 			'month' => (86400 * 30),
 			'year' => (86400 * 365)
 		);
 		if(!isset($_COOKIE[$cookname])) {
 			if(setcookie($cookname, true, time() + $expiry[$expire], '/')) {
 				return true;
 			}
 			return false;
 		}

 		return false;
 	}

 	//Dynamic Funtion To Check Of Cookie Exisiting
 	public static function CookieCheck($cookname) {
 		if(isset($_COOKIE[$cookname]) && $_COOKIE[$cookname] == 1) {
 			return true;
 		}
 		return false;
 	}

	//Dynamic Funtion To Set Session
 	public static function SessionSet($sessname, $sessval) {
 		if(!isset($_SESSION[$sessname])) {
 			return $_SESSION[$sessname] = $sessval;
 		}
 	}

	//Dynamic Funtion To Get Session
 	public static function SessionGet($sessname) {
 		if(isset($_SESSION[$sessname])) {
 			return $_SESSION[$sessname];
 		}
 	}

 }