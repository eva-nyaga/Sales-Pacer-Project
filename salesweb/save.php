<?php
if(isset($_POST['update']))
{
  include('config.php');
	if(isset($_POST['contact'])){ $id = $_POST['contact']; }
	if(isset($_POST['fname'])){ $fname = $_POST['fname']; }
	if(isset($_POST['lname'])){ $lname = $_POST['lname']; }
	if(isset($_POST['user_details'])){ $user_details = $_POST['user_details']; }

$sql = "UPDATE table_login SET user_details = '$user_details' WHERE id = '$id' " ;

$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close();
}

//echo $_POST['fname'];
//echo $_POST['lname'];
//echo $_POST['user_details'];
//echo $_T['contact']
?>


