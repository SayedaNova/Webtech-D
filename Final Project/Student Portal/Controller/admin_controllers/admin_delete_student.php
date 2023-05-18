<?php
	session_start();
	require_once("../../Model/db_con.php");
	require_once ("../../Model/functions.php");
	$user = new admin_class();
	$username = $_SESSION['username'];
	if(isset($_REQUEST['id'])){
		$st_id = $_REQUEST['id'];
	}
	
	if($user->get_admin_session()){
		header('Location: admin_delete_student.php');
		exit();
	}
	
	$delete =$user->delete_student($st_id);
	if($delete){
		header('Location: ../../View/admin_views/view_all_students.php?res=1');
		exit();
	}
?>