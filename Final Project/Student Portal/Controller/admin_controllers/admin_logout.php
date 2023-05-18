<?php
	session_start();
	require_once("../../Model/db_con.php");
	require_once ("../../Model/functions.php");
	$user = new admin_class();
	$user->admin_logout(); //calling admin_logout function
	session_destroy();
	header('Location: ../../View/admin_views/admin_login_view.php?msg=logged_out');
	exit();

?>