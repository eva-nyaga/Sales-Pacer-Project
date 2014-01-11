<?php
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username&&$password)
	{	
		//include 'config.php';
		$connect = mysql_connect("localhost","root","gavana")or die ("Couldn't connect!");
		mysql_select_db("test") or die("Couldn't find db");
		
		$query = mysql_query("Select * FROM table_login WHERE username='$username'");
		
		$numrows = mysql_num_rows($query);
		
		if ($numrows!=0)
		{
			while ($row = mysql_fetch_assoc($query))
			{
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
			}
			//check to see if they match!
			if ($username==$dbusername&&$password==$dbpassword)
			{
				//header("Location:home.php");
				//echo  "Your in <a href='home.php'>Login</a>";
				$_SESSION['username']=$username;
				echo "success";
			}
			else 
				echo ("Incorrect password");
		}
        else
			die("That user doesen't exist!");
	}
	else
		die
		
?>