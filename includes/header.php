	<?php
		$curStr=$_SERVER['REQUEST_URI'];
		$curArr=explode('/',$curStr);
		$cur_path=$curArr[count($curArr)-1];


		$page_title='';
		if($cur_path=='index.php' || $cur_path=='index.php' || $cur_path==''){
		$page_title='Quiz Portal';
		}


		if (isset($_SERVER['HTTPS']) &&
			($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
			isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
			$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
			$ssl = 'https';
		}
		else {
			$ssl = 'http';
		}

		$app_url = ($ssl  )
		. "://".$_SERVER['HTTP_HOST']
		. (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
		. trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");

	?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=100%; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<title><?= $page_title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="This is a website used to provide a question bank and take test of quiz live and rank according to their answer">

	<meta name="author" content="SHADABZONE">	
	<!-- <meta name="authorUrl" content=""> -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.3.1/css/swiper.min.css">

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://cdn.bootcss.com/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
	<script src="scripts/script.js"></script>