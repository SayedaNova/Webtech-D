<?php 
//process.php for edit/update
$connection=mysqli_connect('localhost','root','','student');
$query="SELECT* FROM studentadd";
$result=mysqli_query($connection,$query);
if(isset($_REQUEST['update'])){
  
}
?>
<style>
    table,th,td{
        border:1px solid black; 
    }
</style>
<table style="width:100%;">
    <tr>
        <th>ID</th>
        <th>universityid</th>
        <th>Name</th>
        <th>cgpa</th>
    </tr>
<?php
while($row=mysqli_fetch_assoc($result)){
       $id=$row['id'];
       $universityid=$row['universityid'];
       $name=$row['name'];
       $cgpa=$row['cgpa'];

?>
<tr>
    <td><?php echo $id ; ?></td>
    <td><?php echo $universityid ; ?></td>
    <th><?php echo $name ; ?></th>
    <th><?php echo $cgpa ; ?></th>
    <td><a href="studentAdd2.php?edit_id=<?php echo $id ; ?>">Edit</a>||<a href="studentDelete.php?id=<?php echo $id ?>">Delete</a></td>
</tr>
<?php 
}
?>
</table>
