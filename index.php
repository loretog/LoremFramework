<?php 
	
	error_reporting(E_ALL|E_STRICT);
	session_start();
	date_default_timezone_set("Asia/Manila");	

	define('ROOT', realpath(dirname(__FILE__))); // absolute path of the directory
	$dir = ((dirname($_SERVER['PHP_SELF']) == "/") ? "" : dirname($_SERVER['PHP_SELF']));
	define('DIR', $dir); // directory name
	define('URL', (isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : "http://") . $_SERVER['SERVER_NAME'] . DIR); // absolute URL of the site
	define('DS', DIRECTORY_SEPARATOR);			
	echo ROOT . DS . "load_init.php";

	if( file_exists( ROOT . DS . "load_init.php" ) ) {
		include ROOT . DS . "init.php";
	}	else {
		echo "Failed to load init file.";
		exit;
	}
	
	$Lorem = new Registry();				
	
	$Lorem->db = new Db();
	
	$Lorem->route = new Route($Lorem);
	
	$Lorem->template = new Template($Lorem);
	
	$Lorem->route->load(); // where live! go!!!
	
	$Lorem->db->close();	
	
	unset($Lorem);