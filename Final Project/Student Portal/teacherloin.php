<?php 
$user_id=$_REQUEST['user_id'];
$pass=$_REQUEST['pass'];
$connection=mysqli_connect('localhost','root','','student');
$query="SELECT* FROM teacherloin";
$result=mysqli_query($connection,$query);


while($row=mysqli_fetch_assoc($result)){
       
       $username=$row['username'];
       $password=$row['passwrod'];
       



     if(!($user_id == $username)){
	        header("location:teacherLogin.php");
}
else {
   header("location:teacher-profile.php");
}

    
    

}




?>