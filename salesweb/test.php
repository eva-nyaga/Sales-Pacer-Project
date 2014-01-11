<?php

	
	//$username = $_POST['username'];
	//$password = $_POST['password'];

  include('config.php');
  
  $data = "select * from table_login where ID = 1";
  
  //$query = mysql_query("Select * FROM table_login WHERE username='$username'");

  $query = mysql_query($data);
  
  $data2 = mysql_fetch_array($query);
  
  
?>

<html>
<head>
      <title></title>
 </head>

<body>

<!-- form to display record from database -->
<form>
  First Name: <input type="text" value="<?php echo $data2['fname']?>"/> </br>
  Last Name: <input type="text" value="<?php echo $data2['lname']?>"/> </br>
  Contact: <input type="text" value="<?php echo $data2['contact']?>"/>
</form>

</body>

</html>