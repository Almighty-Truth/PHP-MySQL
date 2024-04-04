<?php
$servername = "localhost";
$username = "root";
$port = "3307";
$dbname = "myDB";
echo"Running";
//create connection
$conn = new mysqli($servername, $username, $password, $port);
if (!$conn) {
    die("Connection failed". mysqli_error($conn));
}
// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>