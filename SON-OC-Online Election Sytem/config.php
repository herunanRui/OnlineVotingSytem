<?php  
$servername = "localhost";
$username = "root";
$password = "";

$db_name = "voting_system"; 

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}