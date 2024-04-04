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
// sql to create table 
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
  ?>
