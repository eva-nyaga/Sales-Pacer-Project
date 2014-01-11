<?php

$username = "root";
$password = "gavana";
$hostname = "localhost";
$db = "sales";

//connection to the databse
	$dbhandle = mysql_connect($hostname, $username, $password)
		or die("Unable to connect to mysql");
		//echo"Connected to mysql";
	$select = mysql_select_db($db) or die(mysql_error());
	?>