<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Signup</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>
<body>
	<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
		<fieldset>
			<legend>Registration Form</legend>
			
			<p>
				<label for="uname" >Name: &emsp; &nbsp; &nbsp; &nbsp; </label>
				<input type="text" name="uname" placeholder="Enter your Name" ><br><hr>
			</p>

			<p>
				<label for="pass">Password:</label>
				<input type="Password" name="pass" placeholder="Enter Your Password"><br><hr>
			</p>
	
			<p>
				<label for="email">Email:</label>
				<input type="email" name="email" placeholder="Enter Your Email" ><br><hr>
			</p>
			<p>
				<label for="phone">Mobile Phone Number:</label>
				<input type="text" name="phone" placeholder="Enter Mobile Number" ><br><hr>
			</p>
			<p>
				<label for="dept">Program:</label>
				<input type="text" name="dept" placeholder="Enter Department" ><br><hr>
			</p>
			<input type="submit" value="Signup"><br><hr>
			<p>
				Already have an account? <a href="student_login_view.php">Login.</a><br>
			</p>
		</fieldset>
	</form>
</body>
</body>
</html>