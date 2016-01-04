<?php
// Setup Document:
// Database Connection here ...
//
	# Database Connection...
	$host = 'localhost';
	$username = 'micl';
	$password = 'applerock';
	$databasename = 'labsolutions';
	$link = mysqli_connect($host, $username, $password, $databasename) OR die('Could not connect because: '.mysqli_connect_error());
    
	# Constants:
	DEFINE('D_TEMPLATE', 'template');
	#
	# Function
	include('functions/data.php');
	include('functions/template.php');
    
    # Site Setup 
    $debug = data_setting_value($dbc, 'debug-status');

	$site_title = "labsolutions";

	if(isset($_GET['page'])){ // Set different languages for the page
		$pageid = $_GET['page']; // Set $pageid equal to value in URL
	}else{
		$pageid = 1; // Set $pageid equal to 1 or the Home Page
	}

	$home_query = "SELECT * FROM pages WHERE id = $pageid";
	$result = mysqli_query($link, $home_query);
	$page = mysqli_fetch_assoc($result);
	#
	# Page setup
	$page = data_page($link, $pageid);
   ?>
