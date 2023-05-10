<?php
session_start();
	require "db_con.php";
	require_once "functions.php";
	$user = new admin_class();
	$admin_id = $_SESSION['admin_id']; 
	$admin_name = $_SESSION['admin_name'];
	if(!$user->get_admin_session()){ 
		header('Location: admin_login.php');
		exit();
	}
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Profile</title>
</head>
<body>
	<h1>Welcome Admin</h1>
	<img src="pictures/admin.png" width="400" height="250"?><br>
	<a href="admin_logout.php">Logout</a><br>

	<a href="view_all_students.php">View all Students</a>
</body>
</html>
	
	