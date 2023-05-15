<?php 
//update.php for edit/update
$connection=mysqli_connect('localhost','root','','student');
if(isset($_REQUEST['submit'])){
        $universityid=$_REQUEST['universityid'];
        $name=$_REQUEST['name'];
        $cgpa=$_REQUEST['cgpa'];
        $hidden_id=$_REQUEST['updating_hidden_id'];
        //echo $_REQUEST['updating_hidden_id'];
        $update_query="UPDATE studentadd SET universityid='$universityid',name='$name',cgpa='$cgpa' WHERE id=$hidden_id";
         $result=mysqli_query($connection,$update_query);

         if($result){
            header("location:studentAdd1.php?update");

         }
    }

?>