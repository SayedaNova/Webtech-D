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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body style="margin:0 auto; padding:150px ;" class="loginBody">
	<form action = "teacherloin.php" method = "post" id="loginForm">
		<fieldset class="login">
			<legend>Login with Your ID</legend>
			<p>
				<label for="user_id" >ID: &emsp; &nbsp; &nbsp; &nbsp; </label>
				<input type="text" name="user_id" placeholder="Enter your ID" value="<?php if(isset($_COOKIE["user_id"])) { echo $_COOKIE["user_id"]; } ?>"><br><hr>
			</p>

			<p>
				<label for="pass">Password:</label>
				<input type="Password" name="pass" placeholder="Enter Your Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><br><hr>
			</p>
			</p>
			<p>
				<input type="checkbox" name="remember" /> Remember me <br><hr>
			</p>
			<input type="Submit" name="login"value="Login"><br><hr>
			<p>
				For Registration: <a href="teacherSignup.php">Register now.</a><br>
				<a href="index.php">Back to Home Page</a>
			</p>
		</fieldset>
	</form>
</body>
</html>