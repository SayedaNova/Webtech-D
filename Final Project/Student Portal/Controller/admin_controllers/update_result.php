<?php
session_start();
	require_once "../../Model/db_con.php";
	require_once "../../Model/functions.php";
	$user = new admin_class();
	$username = $_SESSION['username'];
	if($user->get_admin_session()){
		header('Location: update_result.php');
		exit();
	}
	if(isset($_REQUEST['ar'])){
		$s_id = $_REQUEST['ar'];
		$name = $_REQUEST['vn'];
		$semester = $_REQUEST['sem'];
	}
?>	