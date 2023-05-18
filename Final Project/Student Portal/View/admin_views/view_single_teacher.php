<?php
require_once("../../Model/db_con.php");
require_once ("../../Controller/admin_controllers/view_single_teacher.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teacher</title>
</head>
<body>
	<a href="view_all_teachers.php">Back</a><br>


	<?php
			$i=0;
			$getuser = $user->getteacherbyid($t_id);
			while($row = $getuser->fetch_assoc()){
				$i++;
			?>
			<tr>
				<th>Teacher ID: </th>
				<td><?php echo $row['t_id']; ?><br></td>
				<th>Name: </th>
				<td><?php echo $row['t_name']; ?><br></td>
                <th>Email: </th>
                <td><?php echo $row['t_email']; ?><br></td>
                <th>Phone Number: </th>
                <td><?php echo $row['t_phn']; ?><br></td>
                <th>Program: </th> 
                <td><?php echo $row['t_dept']; ?><br></td>
			</tr>
		
			<tr>
				<td>Update Profile: </td>
				<td><a href="update_teacher.php?id=<?php echo $row['t_id'];?>">Edit Profile</a></td>
			</tr>
			<?php  } ?>
		
</body>
</html>