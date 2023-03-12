<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname="abd";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
        $first_name =  $_REQUEST['fname'];
        $uname = $_REQUEST['uname'];
        $email = $_REQUEST['email'];
        $sql ="INSERT INTO nova (Name, Username, Email)VALUES ('$first_name','$uname','$email')";
            $res = $conn->query($sql);

        if($res)
        {
            echo "Data inserted successfully.<br>";
        }else{
            echo "Data not entered.<br>";
        }


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET['name'])) {
        echo "Empty";
    } else {
        
      echo"ok";
    }  
}

$sql = "SELECT * FROM nova";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["Name"]. ", Username: " . $row["Username"]. ", Email: " . $row["Email"]. "<br>";
  }
} else {
  echo "0 results";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<h1>Register</h1>
</head>
<body>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
	
	 <label for="name"><b>Name *</b></label><br>
     <input type="text" name="fname">
     <input type="text" name="lname"><br>
     <label for="fname">First &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</label>
     <label for="lname">Last</label><br><br>

     <label for="uname"><b> Username * </style> </b></label> <br>
     <input type="text" name="uname"><br><br>

     <label for="email"><b>E-mail *</b></label><br>
     <input type="email" name="email"><br><br>

     <label for="pass"><b>Password *</b></label><br>
     <input type="password" name="pass"><br><br>

     <label for="bio"><b>Short bio</b></label><br>
     <textarea name="bio" rows="5" cols="50"></textarea><br>
     <label for="bio">Share a little information about yourself.</label><br><br>

     <button>Submit</button>

      <table border="2">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
                <?php
                    $sql = "SELECT * FROM nova";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['Name']}</td>
                                    <td>{$row['Username']}</td>
                                    <td>{$row['Email']}</td>
                                </tr>\n";
                        }
                    }
                    
                ?>
        </thead>
  <tbody>

  </tbody>
</table>

</form>
              

</body>
</html>