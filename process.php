<?php
require 'core/init.php';

if(isset($_POST['idOption']) && !empty($_POST['idOption'])) {

	if(is_numeric($_POST['idOption'])) {
		$idOption = $_POST['idOption'];
		$app = new App();
		if($app->CheckUp($idOption, 'choices')) {
				if(!Functions::CookieCheck($chtype[0]['ch_type'])) {
				$chtype = DB::getInstance()->GetAll("choices", "WHERE id = '". $idOption ."'");
				if(Functions::CookieSet($chtype[0]['ch_type'], 'month')) {
					Functions::SessionSet('chtype', $chtype[0]['ch_type']);
					$data = array(
						'status' => true,
						'route'  => 'results.php?page=' . $chtype[0]['ch_type']
					);
					
				}else {
					$data = array(
						'status' => false,
						'route'  => '/'
					);
				}
				echo json_encode($data);
			}
		}
	}
}