<?php
require_once("../../Model/db_con.php");
require_once("../../Controller/admin_controllers/admin-profile.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Profile</title>
	<style >
	body {
			color: darkblue;
			background-color: floralwhite;
			text-align: center;
			
		}
	h1{
		color: darkblue;
		padding-top: 40px;
		padding-left: 250px;
		padding-right: 250px;
	}

	img{
		padding-top: 20px;
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
</style>
</head>
<body>

	<div class="navbar">
	<a href="view_all_students.php">View all Students</a>
	<a href="view_all_teachers.php">View all Teachers</a>
	<a href="student_results.php">Student Results</a>
	
	<a href="../../Controller/admin_controllers/admin_logout.php" class="right">Logout</a>

	<a href=# class="right">Notifications</a>
</div>
	<h1>Welcome Admin</h1>
	
	<img src="pictures/admin.png" width="400" height="250"?><br>


</body>
</html>