<?php
$servername = "localhost";
$username = "root";
$password = "Kwame0321!";

//Create Connection 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}
// check connection
echo "Connected Successfully!";
?>