<?php
$servername = "localhost";
$username = "root";
$password = "4339";
$db_name = "loginsystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>