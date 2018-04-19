<?php

 class DB {

 	//Some Dependencies Private Arguments
 	private static $_Instance;
 	private $_dbh;

 	public function __construct() {
 		try {
 			$this->_dbh = new PDO('mysql:host='. Config::Get('db/host') . ';dbname=' . Config::Get('db/name'), Config::Get('db/user'),Config::Get('db/pass'), array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
 		} catch (PDOException $e) {
 			echo $e->getMessage();
 		}
 	}

 	//Pattern Function To Prevent Looping Class Call
 	public function GetInstance() {
 		if(!isset(self::$_Instance)) {
 			self::$_Instance = new DB();
 		}
 		return self::$_Instance;
 	}

 	public function GetAll($table, $cond = null) {
 		$stmt = $this->_dbh->prepare("SELECT * FROM `{$table}` {$cond}");
 		$stmt->execute();
 		$results = $stmt->fetchAll();
 		return $results;
 	}

 	public function Updata($id, $table) {
 		$stmt = $this->_dbh->prepare("UPDATE `{$table}` SET ch_vots = (ch_vots + 1) WHERE id = {$id}");
 		if($stmt->execute()) {
 			return true;
 		}
 		return false;
 	}


 }