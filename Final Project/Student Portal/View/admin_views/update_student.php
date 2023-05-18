<?php
require_once("../../Model/db_con.php");
require_once ("../../Controller/admin_controllers/update_student.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student</title>
</head>
<body>
	<a href="view_all_students.php">Back</a>
<?php

		$qry=$user->getuserbyid($st_id);
						
			if($_SERVER['REQUEST_METHOD'] == "POST"){
 
						$st_name = $_POST['s_name'];
						$st_email = $_POST['s_email'];
						$st_phn  = $_POST['s_phn'];
						$st_dept = $_POST['s_dept'];
						if(empty($st_name) or empty($st_email) or empty($st_phn) or empty($st_dept)){
							echo "<p style='color:red;text-align:center'>Field must not be empty.</p>";
						}else{
							$update = $user->updateprofile($st_id,$st_name,$st_email,$st_phn,$st_dept);
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
						$result = $user->getuserbyid($st_id);
						while($row = $result->fetch_assoc()){
						?>
					<table >
						
							<td style="width:125px;"></td>
							<td>Name:</td>
							<td><input type="text" name="s_name" value="<?php echo $row['s_name'];?>"></td>
						</tr>
						<tr>
							<td style="width:125px;"></td>
							<td>E-mail:</td>
							<td><input type="email" name="s_email" value="<?php echo $row['s_email']; ?>"></td>
						</tr>
						<tr>
							<td style="width:125px;"></td>
							<td>Contact:</td>
							<td><input type="text" name="s_phn" value="<?php echo $row['s_phn']; ?>"></td>
						</tr>
						<tr>
							<td style="width:125px;"></td>
							<td>Program:</td>
							<td><input type="text" name="s_dept" value="<?php echo $row['s_dept']; ?>"></td>
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


</body>
</html>