<?php
require_once("../../Model/db_con.php");
require_once("../../Controller/admin_controllers/view_all_students.php");
//$user = new admin_class();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students List</title>
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

    input[type=submit] {
    background-color: skyblue;
    color: white;
    padding: 3px 5px;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

    input[type=submit]:hover {
    background-color: #ddd;
    color: darkblue;
    }

    input[type=text]{
        text-align: center;
        color: darkblue;
        border: 3px solid;
    }


</style>


</head>
<body>
<form action="search_student.php" method="GET">
            <input type="text" name="src_student" placeholder="Search Student" />
            <input type="submit" value="Search" />
            <br>
        </form>
        <br>
    <?php
            if(isset($_REQUEST['res'])){
                if($_REQUEST['res']==1){
                    echo "<h3 style='color:green;text-align:center;margin:0;padding:10px;'>Data deleted successfully</h3>";
                }
            }
            
        ?>

	 <table border="2">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Program</th>
                <th>View Details</th>
                <th>Update</th>
				<th>Delete</th>
            </tr>

                <?php
                   // $sql = "SELECT * FROM nova";
                    //$result = $conn->query($sql);
             
					$alluser = $user->get_all_student();

					while($row = $alluser->fetch_assoc()){
						?>

                    			<tr>
                                    <td><?php echo $row['s_id']; ?></td>
                                    <td><?php echo $row['s_name'];?></td>
                                    <td><?php echo $row['s_email'];?></td>
                                    <td><?php echo  $row['s_phn'];?></td>
                                    <td><?php echo $row['s_dept'];?></td>
                                    <td><a href="view_single_student.php?id=<?php echo $row['s_id'];?>"style="color: darkblue; background-color: skyblue;padding: 10px 5px;display: block;width: 100px;margin: auto; text-decoration: none;">View</td>
                                    <td><a href="update_student.php?id=<?php echo $row['s_id'];?>" style="color: darkblue; background-color: greenyellow;padding: 10px 5px;display: block;width: 100px;margin: auto; text-decoration: none;">Update</a></td>
                                    <td><a href="../../Controller/admin_controllers/admin_delete_student.php?id=<?php echo $row['s_id'];?>" style="color: darkblue; background-color: coral;padding: 10px 5px;display: block;width: 100px;margin: auto; text-decoration: none;">Delete</a></td>
                                </tr>
                                <?php } ?>
                        
                    </table>
                    <br>

                    <div class="back">
                    <a href="admin_profile.php">Back</a>
                    </div>
</body>
</html>