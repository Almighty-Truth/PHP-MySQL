<?php
$servername = "localhost";
$username = "root";
$port = "3307";
$dbname="myDB";
echo"Running";
//create connection
$conn = new mysqli($servername, $username, $password, $port);
if (!$conn) {
    die("Connection failed". mysqli_error($conn));
}
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>