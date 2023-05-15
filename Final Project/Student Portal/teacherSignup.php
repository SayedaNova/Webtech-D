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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>
<body>
	<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
		<fieldset>
			<legend>Registration Form</legend>
			
			<p>
				<label for="uname" >Name: &emsp; &nbsp; &nbsp; &nbsp; </label>
				<input type="text" name="uname" placeholder="Enter your Name" ><br><hr>
			</p>

			<p>
				<label for="pass">Password:</label>
				<input type="Password" name="pass" placeholder="Enter Your Password"><br><hr>
			</p>
	
			<p>
				<label for="email">Email:</label>
				<input type="email" name="email" placeholder="Enter Your Email" ><br><hr>
			</p>
			<p>
				<label for="phone">Mobile Phone Number:</label>
				<input type="text" name="phone" placeholder="Enter Mobile Number" ><br><hr>
			</p>
			<p>
				<label for="dept">Department:</label>
				<input type="text" name="dept" placeholder="Enter Department" ><br><hr>
			</p>
			<input type="submit" value="Signup"><br><hr>
			<p>
				Already have an account? <a href="teacherLogin.php">Login.</a><br>
				<a href="index.php">Back to home page</a>
			</p>
		</fieldset>
	</form>
</body>
</html>