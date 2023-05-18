<?php
require_once("../../Model/db_con.php");
require_once ("../../Controller/admin_controllers/student_results.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Results</title>
<style >
	body {
            background-color: floralwhite;
            text-align: center;
            padding-top: 80px;
            padding-left: 250px;
            padding-right: 250px;
        }

    table, th, td {
        border: 1px solid;
        text-align: center;
        padding: 15px;
    }

    th{
        background-color: skyblue;
        color: darkblue;
    }

    tr{
        background-color: #f2f2f2;
        color: darkblue;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        padding: 15px;
    }

    .back a:link,a:visited{
            background-color: skyblue;
            color: darkblue;
            text-align: center;
            padding: 15px 25px;
            display: block;
            width: 100px;
            margin: auto;
            text-decoration: none;
            
        }
    .back a:hover,a:active{
            background-color: #ddd;
            color: darkblue;
            text-decoration: none;
        }
</style>
</head>
<body>
		
		<table border="1" style="text-align:center;">
			<tr>
				<th style="text-align:center;">SL</th>
				<th style="text-align:center;">Name</th>
				<th style="text-align:center;">ID</th>
				<th style="text-align:center;">Add Result</th>
				<th style="text-align:center;">View Result</th>
				
			</tr>
			<?php 
			$i=0;
				$alluser = $user->get_all_student();
				
				while($rows = $alluser->fetch_assoc()){
				$i++;
		?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $rows['s_name'];?></td>
				<td><?php echo $rows['s_id'];?></td>
				<td><a href="add_result.php?ar=<?php echo $rows['s_id']; ?>&vn=<?php echo $rows['s_name'];?>" style="color: darkblue; background-color: #ddd;padding: 10px 5px;display: block;width: 100px;margin: auto; text-decoration: none;">Add Result</a></td>
				<td><a href="view_result.php?vr=<?php echo $rows['s_id']; ?>&vn=<?php echo $rows['s_name'];?>" style="color: darkblue; background-color: skyblue;padding: 10px 5px;display: block;width: 100px;margin: auto; text-decoration: none;">View Result</a></td>
			</tr>
			<?php } ?>
	
		</table>
		<br>
		<div class="back">
	<a href="admin_profile.php">Back</a>
</div>
</body>
</html>