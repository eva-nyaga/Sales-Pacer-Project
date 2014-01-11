<html>
<head>
<title>Update a Record in MySQL Database</title>

	<link rel="stylesheet" href="css/update.css" media="screen">
</head>
<body>

<?php
if(isset($_POST['update']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'gavana';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

	if(isset($_POST['username'])){ $username = $_POST['username']; }
	if(isset($_POST['password'])){ $password = $_POST['password']; }

$sql = "UPDATE table_login ".
       "SET password = '$password' ".
       "WHERE username = '$username' " ;

mysql_select_db('test');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
header("Location:update_success.php");
echo "Updated data successfully\n";
mysql_close($conn);
}
else
{
?>

<div id="art-main">	
<div id="Update_form">

<h1> Update Password</h1>
<p>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<!--<td width="100"></td>-->
<td><input name="username" type="text" id="username" placeholder="username" required ><br></td>
</tr>
<tr>
<!--<td width="100"></td>-->
<td><input name="password" type="text" id="password" placeholder="new password" required ><br></td>
</tr>
<tr>
<!--<td width="100"> </td>-->
<td> </td>
</tr>
<tr>
<!--<td width="100"> </td>-->
<td>
<input name="update" type="submit" id="update" value="Update">
<a href="index.php">Back</a> 
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>