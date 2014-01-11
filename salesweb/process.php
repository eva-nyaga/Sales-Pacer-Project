<?php

if(isset($_POST['update']))
{
  include('config.php');
	if(isset($_GET['contact'])){ $contact = $_GET['contact']; }
	if(isset($_POST['fname'])){ $fname = $_POST['fname']; }
	if(isset($_POST['lname'])){ $lname = $_POST['lname']; }
	if(isset($_POST['username'])){ $username = $_POST['username']; }
	if(isset($_POST['password'])){ $password = $_POST['password']; }
	if(isset($_POST['id_number'])){ $id_number = $_POST['id_number']; }
	
$sql = "UPDATE register SET fname,lname,username,password,id_number, = '$fname','$lname','$username','$password','$id_number' WHERE contact = '$contact' " ;

$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close();
}

?>