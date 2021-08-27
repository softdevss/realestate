<?php
include("connection.php");
error_reporting(0);
$id = $_GET['rn'];
$query = "DELETE FROM contactus WHERE id = '$id'";
$data = mysqli_query($connection,$query);
if($data)
{
    echo "<script>alert('Record Deleted from Database')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/realestate/contact.php">
    <?php
}
else{
    echo "<font color='red'>Failed to delete Record from Database";
}



?>