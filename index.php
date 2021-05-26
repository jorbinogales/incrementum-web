<?php
	require 'components/components.php';
	
	$page = 'home';
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}

	echo headerPHP($page);
	echo navbarPHP($navs);
	if(!isset($_GET['page'])){
		require 'pages/home.php';
		homePage();
	} else {
		switch ($_GET['page']) {

			case 'home':
				require 'pages/home.php';
				homePage();
			break;
			default:
				require 'pages/home.php';
				homePage();
			break;
		}
	}
	echo footerPHP($page, $navs);
?>