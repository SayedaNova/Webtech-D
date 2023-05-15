<?php

//process.php for delete

$connection=mysqli_connect('localhost','root','','student');

$query="SELECT* FROM studentdelete";

$result=mysqli_query($connection,$query);

?>

<style>

 table,th,td{

 border:1px solid black;

 }

</style>

<table style="width:100%;">

 <tr>

<th>id</th>

 <th>uid</th>

 <th>name</th>

 <th>cgpa</th>

 </tr>

<?php

while($row=mysqli_fetch_assoc($result)){

$id=$row['id'];

$uid=$row['universityid'];

$name=$row['name'];

$cgpa=$row['cgpa'];




?>

<tr>




<td><?php echo $id ; ?></td>

 <td><?php echo $uid ; ?></td>

 <td><?php echo $name ; ?></td>

<td><?php echo $cgpa; ?></td>



 

 <td><a href="studentAdd.php?">add</a>||<a href="studentDelete.php?id=<?php echo $id ?>">Delete</a></td>

</tr>

<?php

}

?>

</table>

<?php




?>