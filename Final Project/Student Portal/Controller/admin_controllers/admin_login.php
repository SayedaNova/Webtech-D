<?php
session_start();
require_once("../../Model/db_con.php");
require_once ("../../Model/functions.php");
$user = new admin_class();

if($user->get_admin_session()){ 
	header('Location: ../../View/admin_views/admin_login_view.php'); 
	exit();
}


$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
   if(empty($username) or empty($password)){
				echo "<p style='color:red;text-align:center;'>Field must not be empty.</p>";
			}
			else{

    	// SQL query to fetch information of registered users and finds user match.
    	if(isset(($_POST['login']))){
    		$login = $user->admin_userlogin($username, $password);
    		if($login){
					header("location: ../../View/admin_views/admin_profile.php?user=".$_SESSION['username']);
					exit();
				}
				else {
					$error = "Username or Password is invalid";
					echo $error;
					header("location: ../../View/admin_views/admin_login_view.php?user=invalid");
				}

					header("location: ../../View/admin_views/admin_profile.php?user=".$_SESSION['username']);
    		}
    		
    	}

}
	/*
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$username = $_POST['username'];
			$password = $_POST['password'];

			if(empty($username) or empty($password)){
				echo "<p style='color:red;text-align:center;'>Field must not be empty.</p>";
			}else{
				$login = $user->admin_userlogin($username, $password);
					if($login){
							header('Location: ../../View/admin_views/admin_profile.php?msg=logged_in'); //user gets directed to admin page
						}else{
								echo "<p style='color:red;text-align:center'>Incorrect username or password</p>";
							}
						}
					}
*/
				?>
	
		
			