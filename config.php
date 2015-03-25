<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	
	
	/*
	    Creating constants for heavily used paths makes things a lot easier.
	    ex. require_once(LIBRARY_PATH . "Paginator.php")
	*/
	defined("LIBRARY_PATH")
	    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
	     
	defined("TEMPLATES_PATH")
	    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
	 
	/*
	    Error reporting.
	*/
	ini_set("error_reporting", "true");
	error_reporting(E_ALL|E_STRCT);
?>