<?php
//admin class
require_once("db_con.php");
class admin_class{
	public function __construct(){ //constructor
		$db = new databaseConnection(); //databaseConnection object from databaseConnection class in db_con.php 
	}
	
	//Admin log in function 
	public function admin_userlogin($username, $password){
		global $conn;
		$sql  = "select * from admin where username='$username' and password='$password'"; //fetching data from admin table
		$result=mysqli_query($conn,$sql); 
/*
		$admin_info = $result->fetch_assoc(); //fetches a result row as an associative array
		$count = $result->num_rows;
		if($count == 1){
			session_start();
			$_SESSION['login'] = true; //start admin_login session
			$_SESSION['username'] = $admin_info['username'];
			$_SESSION['password'] = $admin_info['password'];
			return true;
		}else{
			return false;
		}
*/

if($result){
		$rows=mysqli_num_rows($result);
		if($rows == 1){
				session_start();
			   	$row = mysqli_fetch_assoc($result);
				$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];

				setcookie("username", $_SESSION['username']);
				return true;		
	}else{
		return false;
	}
}
}
	
	public function get_admin_session(){
		$_SESSION['admin_login'] = true; 
	}
	

	//admin logout function unsets all login_session variables

	public function admin_logout(){
		session_unset();
		$_SESSION['admin_login'] = null;
		//unset($_SESSION['user']);
		//unset($_SESSION['admin_name']);
		//unset($_SESSION['admin_login']);

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

	// Get all info of a specific student by Student ID
	public function getuserbyid($st_id){
		global $conn;
		$query = $conn->query("select * from st_signup where s_id='$st_id'");
		return $query;
	}
//search students
	public function search($query){
		global $conn;
		$result = $conn->query("SELECT * FROM st_signup WHERE (s_id LIKE '%".$query."%'
							OR s_name LIKE '%".$query."%'
								OR s_phn LIKE '%".$query."%'
									OR s_email LIKE '%".$query."%') order by s_id");
		return $result;
	}

	//Update Student Profile
	public function updateprofile($s_id,$s_name,$s_email,$s_phn,$s_dept){
		global $conn;
		$query = $conn->query("update st_signup set s_name='$s_name',s_email='$s_email',s_phn='$s_phn',s_dept='$s_dept' where s_id='$s_id'");
		return true;
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

	//grading system
	public function add_marks($s_id,$semester,$course,$marks){
		global $conn;
		$qry = "select * from result where s_id='$s_id' and course='$course' and semester='$semester' ";
		$query = $conn->query($qry);
		$count = $query->num_rows;
		if($count>0){
			return false;
		}else{
		$sql = "insert into result(s_id,semester,course,marks) values('$s_id','$semester','$course','$marks')";
		$result = $conn->query($sql);
		return $result;
		}
	}

	//show marks
	public function show_marks($s_id,$semester){
		global $conn;
		$result = $conn->query("select * from result where s_id='$s_id' and semester='$semester' ");
		$count = $result->num_rows;
		if($count>0){
			return $result;
		}else{
			return false;
		}
	}

	//update student result
	public function update_result($s_id,$semester,$course = array()){
		global $conn;
		foreach($course as $key =>$mark ){
			$sql = "update result set marks='$mark' where s_id='$s_id' and semester='$semester' and course='$key' ";
				$result = $conn->query($sql);	
		}
		if($result){
			return true;
		}else{
			return false;
		}
	}

	//for getting All teacher infomation 
	public function get_all_teacher(){
		global $conn;
		$sql = "select * from teacher order by t_id ASC";
		$query = $conn->query($sql);
		return $query;
	}

	// Get all info of a specific teacher by teacher ID
	public function getteacherbyid($t_id){
		global $conn;
		$query = $conn->query("select * from teacher where t_id='$t_id'");
		return $query;
	}

	public function search_teacher($query){
		global $conn;
		$result = $conn->query("SELECT * FROM teacher WHERE (t_id LIKE '%".$query."%'
							OR t_name LIKE '%".$query."%'
								OR t_phn LIKE '%".$query."%'
									OR t_email LIKE '%".$query."%') order by t_id");
		return $result;
	}

	//Update Teacher Profile
	public function update_teacher_profile($t_id,$t_name,$t_email,$t_phn,$t_dept){
		global $conn;
		$query = $conn->query("update teacher set t_name='$t_name',t_email='$t_email',t_phn='$t_phn',t_dept='$t_dept' where t_id='$t_id'");
		return true;
	}
	
	//delete teacher
	public function delete_teacher($t_id){
		global $conn;
		$sql = "delete from teacher where t_id='$t_id' ";
		$result = $conn->query($sql);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
//end class 	
};
