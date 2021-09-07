<?php
include '../includes/dbconnect.php';


$id = $_GET['a'];
// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbDatabasename);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM tblcontact WHERE id='$id'";


$act = (isset($_GET['delete']) ? $_GET['delete'] : '');

 

if ($conn->query($sql) === TRUE) {
  header("location:contact.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>