<?php
require_once("../../Model/db_con.php");
require_once("../../Controller/admin_controllers/admin_login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		//validate 
	function validateForm() {
  	var x = document.forms["myForm"]["username"].value;
  	var y =  document.forms["myForm"]["password"].value;
  if (x == "" && y == "") {
    alert("Username and Password must be filled out");
    return false;
    }
    if(isNan(x)!=x && isNan(y)!=y){
    	alert("invalid");
    	return false;
    }
}


</script>

	<title>Login</title>
<style >
	body {
			color: darkblue;
			background-color: floralwhite;
			text-align: center;
			padding-top: 80px;
			padding-left: 250px;
			padding-right: 250px;
		}

	form{
			border: 3px solid darkblue;
		}

input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: skyblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

input[type=submit]:hover {
  background-color: #ddd;
  color: darkblue;
}

.container {
  padding: 16px;
}


</style>

</head>
<body>
<form name="myForm" action="" method="post" onsubmit="return validateForm()">

<div class="container">
		<p>
			<label for="username" >Username: &emsp; &nbsp;</label>
			<input type="text" name="username" placeholder="Enter your Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><br><hr>
		</p>

		<p>
			<label for="password">Password: &emsp; &nbsp;</label>
			<input type="Password" name="password" placeholder="Enter Your Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><br><hr>
		</p>

		<input type="Submit" name="login" value="login"><br><hr>
		<a href="../../index.php" style="text-decoration: none; text-align: center; color: darkblue;">Back</a>

</div>

<script>
	//window.history.replaceState
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href ); //remove confirm form resubmission error
    }
</script>

		</form>
</body>
</html>
