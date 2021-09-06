<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_multiplelogin";

$id = $_GET['a'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM tblcontact WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location:contact.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>