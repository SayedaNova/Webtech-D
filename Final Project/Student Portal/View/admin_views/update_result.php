<?php
require_once("../../Model/db_con.php");
require_once ("../../Controller/admin_controllers/update_result.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>

		<div>
		<p style="text-align:center;color:#fff;background:purple;margin:0;padding:8px;"><?php echo "Name: ".$name."<br>ID: ".$s_id."<br>Semester: " . $semester; ?></p>
		</div>
			<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$course = $_POST['umark'];
				$res = $user->update_result($s_id,$semester,$course);
			
				if($res){
					echo "<h3 style='color:green;margin:0;padding:0;text-align:center'>Marks successfully updated!</h3>";
				}else{
					echo  "<p style='color:red;text-align:center'>Failed to update data</p>";
				}
			}
		
	
		?>

		
		<form action="" method="post">
		<table style="text-align:center;">
			<tr>
				<th style="text-align:center;">Course</th>
				<th style="text-align:center;">Marks</th>
				
			</tr>
			<?php 
			$i=0;
			
				$get_result = $user->show_marks($s_id,$semester);
				
				while($rows = $get_result->fetch_assoc()){
				$i++;
		?>
			<tr>
				<td><?php echo $rows['course'];?></td>
				<td><input type="text" name="umark[<?php echo $rows['course'];?>]" value="<?php echo $rows['marks'];?>"/></td>
				
			</tr>
			<?php } ?>
			<tr><td colspan="2"><input type="submit" value="Update Result" /></td></tr>
		</table>
	</form>
		
				<p style="text-align:center"><a href="view_result.php?vr=<?php echo $s_id?>&vn=<?php echo $name?>">back</a></p>
</body>
</html>