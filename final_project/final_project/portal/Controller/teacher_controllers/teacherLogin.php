<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname="uniportal"; //database name
$conn = new mysqli($servername, $username, $password,$dbname); 

if(!$conn){
	echo "Connection failed";
}

$user_id = $user_pass = "";
$idErr = $passErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['user_id'])) {
        $idErr = "Id is Required.<br>";
        echo $idErr;

    if(empty($_POST['pass'])){
        $passErr = "Password is required.<br>";
        echo $passErr;
        }
    }

    else{
    	$user_id = $_POST['user_id'];
    	$user_pass = $_POST['pass'];

    	// SQL query to fetch information of registerd users and finds user match.
    	if(isset(($_POST['login']))){
    		$sql = "SELECT t_id,t_password FROM teacher WHERE t_id = '$user_id' and t_password='$user_pass'";
    		$result = $conn->query($sql);

    		if($result){
				$rows=mysqli_num_rows($result);
				if($rows == 1){
			    	$row = mysqli_fetch_assoc($result);
					$_SESSION['user_id'] = $row['t_id'];
					$_SESSION['pass'] = $row['t_password'];
				
					setcookie("user_id", $_SESSION['user_id']);
					header("location: teacher-profile.php?user=".$_SESSION['user_id']);

					exit();
				}
				else {
					$error = "Username or Password is invalid";
				}

					header("location: teacher-profile.php?user=".$_SESSION['user_id']);
    		}
    		
    	}
			
			/*

				if(mysqli_num_rows($res)===1){
			    	$row = mysqli_fetch_assoc($res);
			    	if($row['s_id']===$user_id && $row['s_password'] === $user_pass){
			    		echo "logged in";
			    	
					$_SESSION['user_id'] = $row['s_id'];
					$_SESSION['user_pass'] = $row['s_password'];

					if(isset($_SESSION["user_id"]) && $_SESSION["user_pass"] == true){
    					header("location: student-profile.php?user=".$_SESSION['user_id']);
    					exit;
    				}
					

				}
			}
			*/
		}
	}
		
			
			//mysql_close($connection); // Closing Connection
        		
        

 ?>

