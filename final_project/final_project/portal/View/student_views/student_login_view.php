<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Login</title>
</head>
<body>
	<form action = "student-profile.php" method = "post">
		<fieldset>
			<legend>Login with Your ID</legend>
			<p>
				<label for="user_id" >ID: &emsp; &nbsp; &nbsp; &nbsp; </label>
				<input type="text" name="user_id" placeholder="Enter your ID" value="<?php if(isset($_COOKIE["user_id"])) { echo $_COOKIE["user_id"]; } ?>"><br><hr>
			</p>

			<p>
				<label for="pass">Password:</label>
				<input type="Password" name="pass" placeholder="Enter Your Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><br><hr>
			</p>
			</p>
			<p>
				<input type="checkbox" name="remember" /> Remember me <br><hr>
			</p>
			<input type="Submit" name="login"value="Login"><br><hr>
			<p>
				For Registration: <a href="signup_view.php">Register now.</a><br>
				
			</p>
			</p>
		</fieldset>
	</form>
</body>
</html>