<?php
//databaseConnection class
class databaseConnection{
	public function __construct(){ //constructor
$servername = "localhost";
$username = "root";
$password = "";
$dbname="uniportal"; //database name

global $conn ; 
$conn= new mysqli($servername, $username, $password,$dbname); 
if(!$conn){
			die("Database cannot establish connection properly: " . $conn->connect_error());
		}
}
}
?>