<?php
	session_start();
	require_once "../../Model/db_con.php";
	require_once "../../Model/functions.php";
	$user = new admin_class();
	$username = $_SESSION['username'];
	if(isset($_REQUEST['id'])){
		$t_id = $_REQUEST['id'];
	}else{
		header('Location: view_all_teachers.php');
		exit();
	}
	if($user->get_admin_session()){
		header('Location: view_single_teacher.php');
		exit();
	}

?>