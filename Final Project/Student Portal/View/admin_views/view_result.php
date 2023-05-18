<?php
require_once("../../Model/db_con.php");
require_once ("../../Controller/admin_controllers/view_result.php");
?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Result</title>
</head>
<body>
	<?php	
		//custom function check credit hour and grade point
		function credit_hour($x){
			if($x=="Web Tech") return 3;
			elseif($x == "SQT") return 3;
			elseif($x == "COA") return 3;
			elseif($x == "CN") return 3;
			elseif($x == "MIS") return 3;
			elseif($x == "Compiler") return 3;
			elseif($x == "AI") return 3;
			elseif($x == "DLC lab") return 1;
			elseif($x == "Ethics") return 2;
		}
		function grade_point($gd){
			if($gd<50) return 0;
			elseif($gd>=50 && $gd<60) return 2;
			elseif($gd>=60 && $gd<65) return 2.5;
			elseif($gd>=65 && $gd<70) return 2.75;
			elseif($gd>=70 && $gd<75) return 3;
			elseif($gd>=75 && $gd<80) return 3.25;
			elseif($gd>=80 && $gd<85) return 3.5;
			elseif($gd>=85 && $gd<90) return 3.75;
			elseif($gd>=90 && $gd<=100) return 4;

		}
		?>
	<!--Infomation of student-->
		<div>
	<p style="text-align:center;color:#fff;background:purple;margin:0;padding:8px;"><?php echo "Name: ".$name."<br>Student ID: " . $s_id; ?></p>
	</div>	
	<div>
	
	<form action="" method="post" style="width:23%;margin:0 auto;padding-bottom:5px;">
		<select name="sem" id="">
			<option value="1st">1st semester</option>
			<option value="2nd">2nd semester</option>
			<option value="3rd">3rd semester</option>
			<option value="4th">4th semester</option>
			<option value="5th">5th semester</option>
			<option value="6th">6th semester</option>
			<option value="7th">7th semester</option>
			<option value="8th">8th semester</option>
		</select>
		<input type="submit" value="View Result" />

	</form>
	<?php
	//select semester
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$semester = $_POST['sem'];
			
			$i=0;
			$ch = 0;
			$gp = 0;
				
			
				//$get_result = $user->show_marks();
				
				$get_result = $user->show_marks($s_id,$semester);
				if($get_result){
			?>
				<p><?php echo "<p style='text-align:center;background:#ddd;color:#01C3AA;padding:5px;width:84%;margin:0 auto'>".$semester." Semester Result"?></p>
				<table style="text-align:center;width:85%;margin:0 auto">
					<th>Course</th>
					<th>Marks</th>
					<th>Grade</th>
					<th>Credit(s)</th>
					<th>Status</th>
		<?php		
				while($rows = $get_result->fetch_assoc()){
				$i++;
				//count total credit hour;	
				$ch = $ch + credit_hour($rows['course']);

		?>
			<tr>
				<td><?php echo $rows['course'];?></td>
				<td><?php echo $rows['marks'];?></td>
				<td>
				<?php 
				//set grade for individual subject
					$mark = $rows['marks'];
					if($mark<50){echo "F";}
					elseif($mark>=50 && $mark<60){echo "D";}
					elseif($mark>=60 && $mark<65){echo "D+";}
					elseif($mark>=65 && $mark<70){echo "C";}
					elseif($mark>=70 && $mark<75){echo "C+";}
					elseif($mark>=75 && $mark<80){echo "B";}
					elseif($mark>=80 && $mark<85){echo "B+";}
					elseif($mark>=85 && $mark<90){echo "A";}
					elseif($mark>=90 && $mark<=100){echo "A+";}
					
					//total grade point
					$gp = $gp + (credit_hour($rows['course']) * grade_point($rows['marks']));
					
				?>
				</td>
				<td><?php echo credit_hour($rows['course']); ?></td>
				<td>
				<?php
					$stat = $rows['marks'];
					if($stat<50){
						echo "<span style='background:red;padding:3px 11px;color:#fff;'>Fail</span>";
					}elseif($stat>=50 && $stat<60){
						echo "<span style='background:yellow'>Retake</span>";
					}else{
						echo "<span style='background:green;padding:3px 6px;color:#fff;'>Pass</span>";
					}
				?>
				</td>
				
				
			</tr>
			<?php } ?>
			<tr>
				<td colspan="2">SGPA : </td>
				<td colspan="2">
				<?php
				$sg = $gp/$ch;
				echo "<span style='color:green;padding:3px 6px;font-size:20px'>" . round($sg,2) . "</span>"; ?>
				</td>
				<td>
					<?php
						if($sg<2.5){
							echo "<span style='background:red;padding:3px 6px;color:#fff;'>Probation";
						}
						else{
							echo "<span style='background:green;padding:3px 6px;color:#fff;'>Satisfactory";
						}
					?>
				</td>
			</tr>
		</table>
		
		<?php 
			}
			else{
				echo  "<p style='color:red;text-align:center'>Nothing Found</p>";
				}
		?>
			<p style="float:left; text-align:right;margin:20px 0;width:49%"><a href="update_result.php?ar=<?php echo $s_id?>&sem=<?php echo $semester?>&vn=<?php echo $name?>">Edit Result</a></p>
		<?php 
				}
		?>
		
			<p style="float:right;text-align:left;margin:20px 0;width:49%"><a href="student_results.php">Back to list</a></p>

</div>

</body>
</html>




