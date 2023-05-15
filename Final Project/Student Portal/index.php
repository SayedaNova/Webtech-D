<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<style>
		body{
			background-color: floralwhite;
		}
		h1{
			color:lightcyan;
			text-align: center;
			padding-top: 30px;
		}
		h3{
			color:lightcyan;
			text-align: center;
			padding-top: 10px;
		}

		a:link,a:visited{
			background-color: skyblue;
			color: darkblue;
			text-align: center;
			padding: 15px 25px;
			display: block;
			width: 100px;
			margin: auto;
			
		}
		a:hover,a:active{
			background-color: #ddd;
  			color: darkblue;
		}

		/* Style the top navigation bar */
		.navbar {
  			overflow: hidden;
  			background-color: skyblue;
		}

		/* Style the navigation bar links */
		.navbar a {
  			float: left;
  			display: block;
  			color: darkblue;
  			text-align: center;
  			padding: 14px 20px;
  			text-decoration: none;
		}

		/* Right-aligned link */
		.navbar a.right {
  			float: right;
		}

		/* Change color on hover */
		.navbar a:hover {
  			background-color: #ddd;
  			color: darkblue;
		}
		
		img{
			width: 100%;
			padding-top: 10px;
		}

		.container {
  		position: relative;
  		text-align: center;
		}

		.centered {
  			position: absolute;
  			top: 50%;
  			left: 50%;
  			transform: translate(-50%, -50%);
		}
		
	</style>
	
</head>
<body>

	<div class="navbar">
  		<a href="#">About</a>
  		<a href="#">Academics</a>
  		<a href="#">Campus</a>
  		<a href="#" class="right">Contact us</a>
		</div>

	<div class="container">
	<img src="pictures/university.jpg" alt="University" width="128px";height="128px";>
	<div class="centered">
	<h1>University Portal</h1>
	<h3>Login as:</h3>
	<a href="View/admin_views/admin_login_view.php">Admin</a>
	<a href="Login.php">Student</a>
	<a href="teacherLogin.php">Teacher</a>

	<h3>Register as:</h3>
	<a href="Signup.php">New Student</a>
	<a href="teacherSignup.php">New Teacher</a>
	</div>

	</div>
</body>
</html>
