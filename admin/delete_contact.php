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

  echo '<script type="text/javascript">
  swal({
    title: "Are you sure?",
    text: "Your will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
  },
  function(){
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  });
  </script>';

if ($conn->query($sql) === TRUE) {
  header("location:contact.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>