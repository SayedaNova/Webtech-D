<?php 
$id1=$_REQUEST['id'];
$connection=mysqli_connect('localhost','root','','student');
$query1="DELETE FROM studentadd WHERE id=$id1";
$result1=mysqli_query($connection,$query1);
if(!$result1){
    die("not connect ".mysqli_error());
}
else {
    header("location:studentAdd1.php");
}


?>