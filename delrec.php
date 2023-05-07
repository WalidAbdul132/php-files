<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM empdetails WHERE srlno=101";


if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
