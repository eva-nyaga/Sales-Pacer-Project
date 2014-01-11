<html>
<head>
	<title>Register Here</title>
	
		 <link rel="stylesheet" href="css/register.css" media="screen">
		 <script src="jquery.js"></script>		 

</head>
		 <body>
			<div id="art-main">
			<div id="Registration_form">
			<h1> Register here</h1>
			<p>
			<form action='process.php' method='POST'>
				First Name: <input type='text' name='fname' id='fname'required ><br>
				Second Name: <input type='text' name='lname' id='lname'required><br>
				Username: <input type='text' name='username' id='username' required><br>
				Password: <input type='password' name='password' id='password' required><br>
				contact: <input type='text' name='contact' id='contact' ?contact='.$contact.'><br>
				NationalId: <input type='text' name='id_number' id='id_number' required><br>
				<input type='submit' value='Register'>
				<input type='reset' value='Reset'>
				<a href="index.php">Back</a>
			</form>
	
		</body>
</html>