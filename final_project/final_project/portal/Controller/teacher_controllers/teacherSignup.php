<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname="uniportal"; //database name
$conn =  mysqli_connect($servername, $username, $password,$dbname); 
$user_name = $pass =$phone = $email = $dept = "";
$Err = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['uname']) or empty($_POST['pass']) or empty($_POST['email']) or empty($_POST['phone']) or empty($_POST['dept'])) {
        $Err = "Fields must not be Empty.<br>";
        echo $Err;

    }
    else{
    	$user_name = $_POST['uname'];
    	$pass = $_POST['pass'];
    	$email = $_POST['email'];
    	$phone = $_POST['phone'];
    	$dept = $_POST['dept'];

    	 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      		$emailErr = "Invalid email format";
      		echo $emailErr;
    	}


    	$sql ="INSERT INTO teacher ( t_name, t_password, t_email, t_phn, t_dept)VALUES ('$user_name','$pass','$email','$phone','$dept')";
    	$res = $conn->query($sql);

    	if($res){

    		header("Location: teacherSignup.php?success=Your account has been created successfully");
	        exit();
    	}
    	else{
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    	}

        }
    }

 ?>

