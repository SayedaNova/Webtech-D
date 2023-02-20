<<!DOCTYPE html>
<html>
<head>
	<h1>Welcome</h1>
</head>
<body>

<form action="lab3-1.php" method = "get">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
<input type="submit">

<?php  
	$name = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(empty($_GET['name']))
    {
        $name="";
        echo $name;
    }
    else
        $name= $_GET['name'];
}

if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    if(empty($_GET['email']))
    {
        $email="";
        echo $email;
    }
    else
        $email= $_GET['email'];
}
?>
</form>

</body>
</html>
