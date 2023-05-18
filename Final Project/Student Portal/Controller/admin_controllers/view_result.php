<?php
session_start();
	require_once "../../Model/db_con.php";
	require_once "../../Model/functions.php";
	$user = new admin_class();
	$username = $_SESSION['username'];
	if($user->get_admin_session()){
		header('Location: view_result.php');
		exit();
	}
	if(isset($_REQUEST['vr'])){
		$s_id = $_REQUEST['vr'];
		$name = $_REQUEST['vn'];
	}
?>	