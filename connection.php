<?php
$servername = "localhost";
$username = "root";
$password = "4339";
$dbname = "loginsystem";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn-> connect_error){
    die("Connection failed" . $conn->connect_error);

}
echo "Connected succesfully"
?>