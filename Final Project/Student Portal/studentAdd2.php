<?php
//index.php for edit/update
$connection=mysqli_connect('localhost','root','','student');

 if(isset($_REQUEST['edit_id'])){
        $recv_id=$_REQUEST['edit_id'];
        $get_info="SELECT* FROM studentadd WHERE id=$recv_id";
        $result=mysqli_query($connection,$get_info);
        while($row=mysqli_fetch_assoc($result)){
              
            ?>
<form action="studentAdd3.php" method="post">
<input type="text" name="universityid" value="<?php  echo $row['universityid']; ?>" placeholder="universityid">
<input type="text" name="name" value="<?php  echo $row['name']; ?>" placeholder="name">
<input type="text" name="cgpa" value="<?php  echo $row['cgpa']; ?>"placeholder="cgpa">
<input type="submit" value="update data" name="submit">
<input type="hidden" name="updating_hidden_id" value="<?php echo $recv_id ?>">
</form>
            <?php
        }
 }
?>



