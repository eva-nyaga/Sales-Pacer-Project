<html>

	<title>Login Here</title>
	
		 <link rel="stylesheet" href="css/login.css" media="screen">
		 <script src="jquery.js"></script>
		 
		 <body>
			<div id="art-main">
			
			<div id="Login_form">
			<h1> Login here</h1>
			<p>
			
				<input type="text" name="username" id="username" placeholder="username" required/><p><br>
			    <input type='password' name='password' id="password" placeholder="password" required/><p><br>
				<input type='submit' value='Login' onclick="return login()">
				<a href="update.php">Update password</a>
				<div id="error"></div><p>
				No username or password click here  <a href="registration.php">Register</a>  to register
				
			
	<script>
        function login() {
			$('#myForm').preventDefault;
            var uname = $('#username').val();
            var pwd = $('#password').val();
            if (uname == "" || pwd == "") {
                $('#error').html('Please provide your username and password');
                
            }
            else {
                $.ajax({
                    type: 'post',
                    url: 'login.php',
                    data: 'username='+uname+'&password='+pwd,
                    success : function(response) {
						if(response == "success") {
							window.location = "home.php";
						}
						else {
							 $('#error').html(response);
						}
                    }
                });
            }
        }
    </script>
		</body>
</html>
