<?php
$servername = "localhost";
$username = "root";
$port = "3307";

echo"Running";
//create connection
$conn = new mysqli($servername, $username, $password, $port);
if (!$conn) {
    die("Connection failed". mysqli_error($conn));
}
echo "Passed connection";

// create Database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
}
else
{
    echo "Error creating database". mysqli_error($conn);
}
mysqli_close($conn);
?>