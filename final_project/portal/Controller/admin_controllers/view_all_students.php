<?php
	session_start();
	require "db_con.php";
	require_once "functions.php";
	$user = new admin_class();
	$admin_id = $_SESSION['admin_id'];
	$admin_name = $_SESSION['admin_name'];
	if(!$user->get_admin_session()){
		header('Location: admin_login.php');
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students List</title>
</head>
<body>

	 <table border="2">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Program</th>
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
                                 
                                    <td><a href="admin_delete_student.php?id=<?php echo $row['s_id'];?>">Delete</a></td>
                                </tr>
                                <?php } ?>
                        
                    </table>
                    <br>
                    <a href="admin-profile.php">Back to admin Profile.</a>
              
</body>
</html>