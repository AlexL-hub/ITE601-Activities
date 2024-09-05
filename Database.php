<?php
$servername = "localhost";
$username = "alex";
$password = "potpot";

//create connection
$conn = new mysqli($servname, $username, $password);

// Check connection
if ($conn->connect_error) {
   die("Connection failed:" . $conn->connect_error);
}
echo "Connected succesfully";
?>