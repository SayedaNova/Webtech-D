<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	echo "The file ". basename($_FILES["fileToUpload"]["name"])." has been uploaded.";
}
else{
	echo "Sorry, there was an error uploading your file."; 
}

$nameErr = $emailErr = $passErr = "";
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required <br>";
    echo $nameErr;
  } 
  else {
  	$myfile = fopen("newfile.txt","w") or die("Unable to open file!"); 
    $name = $_POST["name"] . "\n";
    fwrite($myfile, $name);
    $email = $_POST["email"];
    fwrite($myfile, $email);
    fclose($myfile);
  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed<br>";
      echo $nameErr;
    }
}

  if (empty($_POST["email"])) {
    $emailErr = "Email is required <br>";
    echo $emailErr;
  } 
  else {
    $email = $_POST["email"];
 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      echo $emailErr;
    }
 }

  if (empty($_POST["password"])) {
    $passErr = "Password is required <br>";
    echo $passErr;
  } 
  else {
    $password = $_POST["password"];
 }

 }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend><h3><B>REGISTRATION</B></h3> </legend>
	
			<label for="name"> <B> Name:</B></label>
			<input type="text" name="name" placeholder="Enter First Name"> <?php echo "$name" ;?><br>
    		<hr>
	
			<label for="email"><B>Email:</B></label>
    		<input type="text" name="email" placeholder="Enter your Email"> <?php echo "$email" ;?><br>
    		<hr>

    		<label for="password"><B>Password:</B></label>
    		<input type="password" name="password" placeholder="Enter your password"><br>
    		<hr>

    		<label for="fileUpload"><B>Your Image:</B></label>
    		<input type="file" name="fileToUpload"><br><hr>
    		<input type="submit" name="submit">

		</fieldset>

	</form>

</body>
</html>