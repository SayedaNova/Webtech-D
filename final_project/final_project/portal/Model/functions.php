<?php
// admin class
class admin_class{
	public function __construct(){ //constructor
		$db = new databaseConnection(); //databaseConnection object from databaseConnection class in db_con.php 
	}
	
	//Admin log in function 
	public function admin_userlogin($username, $password){
		global $conn;
		$sql  = "select id,username from admin where username='$username' and password='$password'"; //fetching data from admin table
		$result = $conn->query($sql); 
		$admin_info = $result->fetch_assoc(); //fetches a result row as an associative array
		$count = $result->num_rows;
		if($count == 1){
			session_start();
			$_SESSION['admin_login'] = true; //start admin_login session
			$_SESSION['admin_id'] = $admin_info['id']; 
			$_SESSION['admin_name'] = $admin_info['username'];
			return true;
		}else{
			return false;
		}
		
	}
	public function get_admin_session(){
		return @$_SESSION['admin_login']; 
	}
	//admin logout function unsets all login_session variables
	public function admin_logout(){
		$_SESSION['admin_login'] = false;
		unset($_SESSION['admin_id']);
		unset($_SESSION['admin_name']);
		unset($_SESSION['admin_login']);
	}
	
	/*
	**********************
	----------------------
	All functions for Admin 
	----------------------
	**********************
	*/
	
	//for getting All student infomation 
	public function get_all_student(){
		global $conn;
		$sql = "select * from st_signup order by s_id ASC";
		$query = $conn->query($sql);
		return $query;
	}
	
	//delete student
	public function delete_student($s_id){
		global $conn;
		$sql = "delete from st_signup where s_id='$s_id' ";
		$result = $conn->query($sql);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
//end class 	
};