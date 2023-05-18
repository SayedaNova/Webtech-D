<?php
	session_start();
	require_once("../../Model/db_con.php");
	require_once ("../../Model/functions.php");
	$user = new admin_class();
	$username = $_SESSION['username'];
	if($user->get_admin_session()){
		header('Location: ../../View/admin_views/student_results.php');
		exit();
	}

?>