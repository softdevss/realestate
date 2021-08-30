<?php 

function admin_dissable(){
    global $connection;

    $query = "SELECT * FROM masterlogin";
    $dissable = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($dissable)){
    $status = $row['status'];

    

     if($status == 'dissable'){

       header("location:index.php");
       session_destroy();
     
     }else{

        header("location: admin/admin_home.php");

     }
}
 
 }

?>