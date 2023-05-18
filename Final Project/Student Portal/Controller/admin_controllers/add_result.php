<?php
session_start();
	require_once "../../Model/db_con.php";
	require_once "../../Model/functions.php";
	$user = new admin_class();
	$username = $_SESSION['username'];
	if($user->get_admin_session()){
		header('Location: add_result.php');
		exit();
	}
	if(isset($_REQUEST['ar'])){
		$s_id = $_REQUEST['ar'];
		$name = $_REQUEST['vn'];
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$course = $_POST['course'];
		$semester = $_POST['semester'];
		$marks = $_POST['marks'];
		$res = $user->add_marks($s_id,$semester,$course,$marks);
				if($res){
					echo "<h3 style='color:green;margin:0;padding:0;text-align:center'>Marks successfully entered</h3>";
				}else{
					echo  "<p style='color:red;text-align:center'>Failed to enter data</p>";
				}
			}
		?>