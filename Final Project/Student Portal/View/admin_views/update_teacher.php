<?php
require_once("../../Model/db_con.php");
require_once ("../../Controller/admin_controllers/update_teacher.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teacher</title>
</head>
<body>

<?php

		$qry=$user->getteacherbyid($t_id);
						
			if($_SERVER['REQUEST_METHOD'] == "POST"){
 
						$t_name = $_POST['t_name'];
						$t_email = $_POST['t_email'];
						$t_phn  = $_POST['t_phn'];
						$t_dept = $_POST['t_dept'];
						if(empty($t_name) or empty($t_email) or empty($t_phn) or empty($t_dept)){
							echo "<p style='color:red;text-align:center'>Field must not be empty.</p>";
						}else{
							$update = $user->update_teacher_profile($t_id,$t_name,$t_email,$t_phn,$t_dept);
							if($update){
								echo "<h4 style='color:green;text-align:center'>Information Updated successfully</h4>";
							}else{
								echo "<h4 style='color:red;text-align:center;text-align:center'>Failed to update</h4>";
							}
						}
					}
				?>
			
				<form action="" method="post" enctype="multipart/form-data">
						<?php
						$result = $user->getteacherbyid($t_id);
						while($row = $result->fetch_assoc()){
						?>
					<table >
						
							<td style="width:125px;"></td>
							<td>Name:</td>
							<td><input type="text" name="t_name" value="<?php echo $row['t_name'];?>"></td>
						</tr>
						<tr>
							<td style="width:125px;"></td>
							<td>E-mail:</td>
							<td><input type="email" name="t_email" value="<?php echo $row['t_email']; ?>"></td>
						</tr>
						<tr>
							<td style="width:125px;"></td>
							<td>Contact:</td>
							<td><input type="text" name="t_phn" value="<?php echo $row['t_phn']; ?>"></td>
						</tr>
						<tr>
							<td style="width:125px;"></td>
							<td>Program:</td>
							<td><input type="text" name="t_dept" value="<?php echo $row['t_dept']; ?>"></td>
						</tr>
						
						<tr>
						<td style="width:125px;"></td>
						<td></td>
						<td colspan="2">
							<input style="background:#3498db;color:#fff;width:168px;border-radius:5px;" type="submit" name="Update" value="Update">
							</td>						
						</tr>
					</table>
						<?php } ?>
				</form>




	<a href="view_all_teachers.php">Back</a>
</body>
</html>