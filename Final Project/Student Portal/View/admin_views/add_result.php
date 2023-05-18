<?php
require_once("../../Model/db_con.php");
require_once("../../Controller/admin_controllers/add_result.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add</title>
</head>
<body>
	<div>
	<p style="text-align:center;color:#fff;background:purple;margin:0;padding:8px;"><?php echo "Name: ".$name."<br>Student ID: " . $s_id; ?></p>
	</div>	
	<div style="width:40%;margin:50px auto">
		
		<table style="text-align:center;">
			<form action="" method="post">
				<table>
					<tr>
						<td style="text-align:center;">Select Course: </td>
						<td>
						<select name="course" id="">
							<option value="Web Tech" style="text-align:center;">Web Technologies</option>
							<option value="SQT" style="text-align:center;">Software Quality Testing</option>
							<option value="COA" style="text-align:center;">Computer Organisation and Architecture</option>
							<option value="CN" style="text-align:center;">Computer Networks</option>
							<option value="MIS" style="text-align:center;">Management Information Systems</option>
							<option value="Compiler" style="text-align:center;">Compiler Design</option>
							<option value="AI" style="text-align:center;">Artificial Intelligence</option>
							<option value="DLC lab" style="text-align:center;">DLC lab</option>
							<option value="Ethics" style="text-align:center;">Engineering Ethics</option>
							
						</select>
						</td>
					</tr>
					<tr>
						<td style="text-align:center;">Select Semester: </td>
						<td style="text-align:center;">
						<select name="semester" id="">
							<option value="1st">1st semester</option>
							<option value="2nd">2nd semester</option>
							<option value="3rd">3rd semester</option>
							<option value="4th">4th semester</option>
							<option value="5th">5th semester</option>
							<option value="6th">6th semester</option>
							<option value="7th">7th semester</option>
							<option value="8th">8th semester</option>
						</select>
						</td>
					</tr>
					<tr>
						<td style="text-align:center;">Input marks: </td>
						<td style="text-align:center;"><input type="text" name="marks" placeholder="Enter marks" required /></td>
					</tr>
					<tr>
						<td style="text-align:center;"><input type="submit" name="sub" value="Add marks" /></td>
					</tr>
				</table>
				
			</form>
		</table>
		
	</div>
				<p style="float:left; text-align:right;margin:20px 0;width:49%"><a href="student_results.php">Back</a></p>
	
</body>
</html>