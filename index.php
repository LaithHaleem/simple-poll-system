<?php 
require 'core/init.php';

Functions::Inc('includes/header.php');

	if(Functions::CheckRequest('page')) {

		Functions::Inc('polls.php');

	}else {

		Functions::Inc('home.php');

	}

Functions::Inc('includes/footer.php');
?>