<?php
	session_start();
	require_once("../../Model/db_con.php");
	require_once ("../../Model/functions.php");
	$user = new admin_class();
	$username = $_SESSION['username'];
	if(isset($_REQUEST['id'])){
		$t_id = $_REQUEST['id'];
	}
	
	if($user->get_admin_session()){
		header('Location: admin_delete_teacher.php');
		exit();
	}
	
	$delete =$user->delete_teacher($t_id);
	if($delete){
		header('Location: ../../View/admin_views/view_all_teachers.php?res=1');
		exit();
	}
?>