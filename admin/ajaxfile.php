<?php
include "../connection.php";

$request = $_POST['status'];


// Enable/Disable user
if($request == 'dissable'){
    $status = $_POST['status'];
    $username = $_POST['username'];

    $return_val = "";
    if($status == 'enable'){
        $return_val = "enable";
    }else{
        $return_val = "dissable";
    }
}

?>