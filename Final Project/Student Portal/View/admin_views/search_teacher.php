<?php
require_once("../../Model/db_con.php");
require_once("../../Controller/admin_controllers/search_teacher.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search</title>
	<style>
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

<table border="1">
			<?php 
				$key = $_GET['src_teacher'];
				$min_length = 1;
				if(strlen($key) >= $min_length){
					$key = htmlspecialchars($key);
					$src_result = $user->search_teacher($key);
					$count = $src_result->num_rows;
					if($count>0){
			?>
			<tr>
				<th>Name</th>
				<th>ID</th>
				<th>Show Profile</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
					while($rows = $src_result->fetch_assoc()){				
			?>
			
			<tr>
				<td><?php echo $rows['t_name'];?></td>
				<td><?php echo $rows['t_id'];?></td>
				<td><a href="view_single_teacher.php?id=<?php echo $rows['t_id'];?>" style="color: darkblue; background-color: skyblue;padding: 10px 5px;display: block;width: 100px;margin: auto; text-decoration: none;">View Details</a></td>
				<td><a href="update_teacher.php?id=<?php echo $rows['t_id'];?>" style="color: darkblue; background-color: greenyellow;padding: 10px 5px;display: block;width: 100px;margin: auto; text-decoration: none;">Update</a></td>
				<td><a href="../../Controller/admin_controllers/admin_delete_teacher.php?id=<?php echo $rows['t_id'];?>" style="color: darkblue; background-color: coral;padding: 10px 5px;display: block;width: 100px;margin: auto; text-decoration: none;">Delete</a></td>
			</tr>
			
			<?php } ?>
			</table>
		<?php
		}else{
				echo "<h2 style='font-size:45px;text-align:center;color:#ddd;'>No Result Found</h2>";
			}
				
		}else{
			  echo "<h2 style='font-size:45px;text-align:center;color:#ddd;'>No Result Found</h2>";
		}
		?>
		<br>
		<div class="back">
			<a href="view_all_teachers.php">Back</a>
		</div>
</body>
</html>