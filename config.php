<?php
	error_reporting(0);
	ini_set('display_errors', '0');

	date_default_timezone_set('Asia/Bangkok');

	$dbhost = 'localhost';
	$dbuser = 'passwork_z';
	$dbpass = '1q2w3e4r5t';
	$dbname = 'passwork_z';

	//Connect
	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if (mysqli_connect_errno()) {
		printf("MySQLi connection failed: ", mysqli_connect_error());
		exit();
	}

	// Change character set to utf8
	if (!$mysqli->set_charset('utf8')) {
		printf('Error loading character set utf8: %s\n', $mysqli->error);
	}
?>