<?php
	session_start();
	require "db_con.php";
	require_once "functions.php";
	$user = new admin_class();
	$user->admin_logout(); //calling admin_logout function
	header('Location: admin_login.php');
	exit();
?>