<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "id|_card";
// Create connection
$con = mysqli_connect($hostname, $username, $password,$database);
// Check connection
if (!$con) {
 die("Connection failed: ");  
}
 echo "Connected successfully";
?>