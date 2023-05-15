<?php 
$id1=$_REQUEST['id'];
$connection=mysqli_connect('localhost','root',' ','student_list');
$query="DELETE FROM section WHERE id=$id1";
$result=mysqli_query($connection,$query);
if($result){
    header("location:student_list.php");
}


?>