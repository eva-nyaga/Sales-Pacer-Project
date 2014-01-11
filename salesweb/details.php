<?php 
session_start();
//echo "Welcome, ".$_SESSION['username']."!";
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="css/style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<style>
.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
	<div id="art-main">
    <div class="art-sheet clearfix">
	
<header class="art-header clearfix">
    <div class="art-shapes">
		<h1 class="art-headline" data-left="1.6%">
			Sales Software
		</h1>
    </div>
	<nav class="art-nav clearfix">
		<ul class="art-hmenu"><li><a href="details.php" class="active">Home</a></li></ul> 
	</nav>        

</header>
		<div class="art-layout-wrapper clearfix">
        <div class="art-content-layout">
        <div class="art-content-layout-row">
 
 <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
         <h2 class="art-postheader">Home</h2>
		<?php
			//print date("j of F Y, \a\\t g.i a", time());
			echo date("l, F d, Y h:i" ,time()); 
		?>
<div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
<div class="art-content-layout-row">
<div class="art-layout-cell layout-item-0" style="width: 100%" >

 <p>
<?php

  include('config.php');

  if(isset($_GET['contact'])){
	$id = $_GET['contact'];
	
	}
	//echo 'id = '.$id;
	  $data = "select * from table_login where id = '$id'";

	  $query = mysql_query($data);
	  
	  $data2 = mysql_fetch_array($query);
  
  
  //$data = "SELECT COUNT('id') FROM 'table_login' WHERE 'username' = '$username'";
  
  //$data = "select * from table_login where username = '$username'";
  
?>

<html>
<head>
      <title></title>
 </head>

<body>

<!--form to display record from database-->
<form  action='save.php' method='POST' >
  First Name: <input type="text" name="fname" value="<?php echo $data2['fname']?>"/> </br>
  Second Name: <input type="text" name="lname" value="<?php echo $data2['lname']?>"/> </br>
  User Details: <input type="text" name="user_details" value="<?php echo $data2['user_details']?>"/>
  <input type="hidden" name="contact" value="<?php echo $_GET['contact']?>"/>
  <input type='submit' name="update" value='Save'>
  <a href="logout.php">Log out</a> 
</form>

</body>

</html>

    <br></p>
</div>
</div>
</div>
</div>
</article>
</div>
</div>
</div>
</div>
<footer class="art-footer clearfix">
	<p><br></p>
		<p>Copyright  &copy; 2013. All Rights Reserved.</p>
</footer>
</div>
    <p class="art-page-footer">
    </p>
</div>


</body>
</html>