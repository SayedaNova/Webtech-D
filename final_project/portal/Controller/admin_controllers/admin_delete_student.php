<?php
	session_start();
	require "db_con.php";
	require_once "functions.php";
	$user = new admin_class();
	$admin_id = $_SESSION['admin_id'];
	$admin_name = $_SESSION['admin_name'];
	if(isset($_POST['s_id'])){
		$s_id = $_POST['s_id'];
	}
	
	if(!$user->get_admin_session()){
		header('Location: admin_login.php');
		exit();
	}
	
	$delete =$user->delete_student($s_id);
	if($delete){
		header('Location: view_all_students.php');
		exit();
	}
?>