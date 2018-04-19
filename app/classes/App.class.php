<?php

 class App {

 	//Function To Collection Of Votes
 	public static function Collect($results = array(), $record) {
 		foreach ($results as $value) {
 			$col += $value[$record];
 		}
 		return $col;
 	}

 	//Function To Get Precentage Of Recorde Item Of Total Items
 	public static function PrecItem($results, $totlaitems) {
 		$prec = round($results / $totlaitems * 100, PHP_ROUND_HALF_UP);
 		return $prec;
 	}

 	//Function To Check Id If True And It's Exsists And Update
 	public function CheckUp($idop, $table) {
 		$allrecords = DB::getInstance()->GetAll($table);
 		if($idop <= count($allrecords)) {
			if(DB::getInstance()->Updata($idop, $table)) {
				return true;
			}
			return false;
 		}
 		return false;
 	}



 }