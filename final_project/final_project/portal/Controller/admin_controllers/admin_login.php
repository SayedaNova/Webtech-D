<?php
session_start();
require "db_con.php";
require_once "functions.php";
$user = new admin_class();
if($user->get_admin_session()){
	header('Location: admin-profile.php'); //user gets directed to admin page
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>
	<?php

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$username	  = $_POST['username'];
			$password = $_POST['password'];

			if(empty($username) or empty($password)){
				echo "Username and Password Fields must not be empty.</p>";
			}else{
				$login = $user->admin_userlogin($username, $password);
					if($login){
							header('Location: admin-profile.php');
						}else{
							echo "Incorrect username or password</p>";
							}
						}
					}
				?>
</body>
</html>
			
		
			