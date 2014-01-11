<?php 
session_start();
//echo "Welcome, ".$_SESSION['username']."!";
?>

<?php

  include('config.php');
  
  if(isset($_POST['username'])){$username=$_POST['username'];}

  $data = "select * from table_login where username = '$username' ";
  
  //$query = mysql_query("Select * FROM table_login WHERE fname='$fname'");
  while($row = mysql_fetch_array($data)){
  //data2['fname']=row['fname'];
  //data2['lname']=row['lname'];	  
  }


  
  
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
			<a href="#">Sales Software</a>
		</h1>
    </div>
	<nav class="art-nav clearfix">
		<ul class="art-hmenu"><li><a href="index.html" class="active">Home</a></li></ul> 
	</nav>                 
</header>
		<div class="art-layout-wrapper clearfix">
        <div class="art-content-layout">
        <div class="art-content-layout-row">
 <!-- <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-vmenublock clearfix">
		<div class="art-vmenublockheader">
			<h3 class="t"></h3>
        </div>
        <div class="art-vmenublockcontent">
			<ul class="art-vmenu">Home</ul>
			<p>&nbsp;</p>
        </div>
		</div>
		</div>
        -->
 <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
         <h2 class="art-postheader">Home</h2>
		 
 <!-- form to display record from database -->
<form action='' method='POST'>
  <p>
  First Name: <input type="text" value="<?php echo $row['fname']?>"/> </br>
  Last Name: <input type="text" value="<?php echo $row['lname']?>"/> </br>
  Contact: <input type="text" value="<?php echo $row['contact']?>"/>
  <input type='submit' value='Save'>
  
</form>
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
		<p>Copyright © 2013. All Rights Reserved.</p>
</footer>
</div>
    <p class="art-page-footer">
    </p>
</div>


</body>
</html>