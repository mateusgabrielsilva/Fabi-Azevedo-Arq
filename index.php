<?php

if ($_GET) {
	$url = explode('/', $_GET['url']);

	if (
		$url[0] == "projeto-1" || $url[0] == "projeto-2" || 
		$url[0] == "projeto-3" || $url[0] == "projeto-4" 
	) {
		require_once 'pages/' . $url[0] . '.php';
	} else {
		include  'pages/main.php';
	}
} else {
	include  'pages/main.php';
}

include 'pages/footer.php';

