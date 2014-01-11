<?php

$username = "root";
$password = "";
$hostname = "localhost";
$db = "newsales";

//connection to the databse
	$dbhandle = mysql_connect($hostname, $username, $password)
		or die("Unable to connect to mysql");
		//echo"Connected to mysql";
	$select = mysql_select_db($db) or die(mysql_error());
	
	/*
			echo "</br>";
		if($dbhandle) {
			echo "Successfully connected to mysql!";
		}else {
			echo "Not Connected";
			}

			echo "</br>";
		if($db) {	
			echo "Successfully connected to the database web!";
		}else {
			echo "Not Connected";
			}
		*/
?> 
