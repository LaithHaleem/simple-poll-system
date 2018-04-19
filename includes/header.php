<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:image:height" content="519">
	<meta property="og:image:width" content="991">
	<meta property="og:title" content="شارك في استطلاعات الرأي للانتخابات البرلمانية العراقية 2018">
	<meta property="og:url" content="http://astitlaat.cf">
	<meta property="og:image" content="http://astitlaat.cf/statics/imgs/static/og-image.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
	<?php
		$request = Functions::GetRequest('page');
		$restult = DB::getInstance()->GetAll('polls', 'WHERE p_name = "'. $request .'"');
		if($restult != null):
	?>
	<title><?php echo 'استطلاع ' . $restult[0]['p_title']; ?></title>
	<?php
		else:
	?>
	<title>استطلاع الرأي | الانتخابات العراقية 2018</title>
	<?php
	 	endif; 
	?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Changa">
	<?php
		Functions::LoadFiles('statics/libs/css');
		Functions::LoadFiles('statics/dist/css');
	?>
</head>
<body onload="hideOnLoad('overlay', 'hidden')">