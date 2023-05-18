<?php
require_once("../../Model/db_con.php");
require_once ("../../Controller/admin_controllers/view_single_student.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student</title>
</head>
<body>
	<a href="view_all_students.php">Back</a><br>


	<?php
			$i=0;
			$getuser = $user->getuserbyid($st_id);
			while($row = $getuser->fetch_assoc()){
				$i++;
			?>
			<tr>
				<th><b>Student ID: <b></th>
				<td><?php echo $row['s_id']; ?><br></td>
				<th><b>Name: <b></th>
				<td><?php echo $row['s_name']; ?><br></td>
                <th><b>Email: <b></th>
                <td><?php echo $row['s_email']; ?><br></td>
                <th><b>Phone Number: <b></th>
                <td><?php echo $row['s_phn']; ?><br></td>
                <th><b>Program: <b></th> 
                <td><?php echo $row['s_dept']; ?><br></td>
			</tr>
		
			<tr>
				<td>Update Profile: </td>
				<td><a href="update_student.php?id=<?php echo $row['s_id'];?>">Edit Profile</a></td>
			</tr>
			<?php  } ?>
</body>
</html>
