
<?php
    include '../includes/dbprocess.php';
    include './includes/header.php';
  
?>
<!DOCTYPE html>
<html lang="en">

<body>


<div class="page-title">
	<h3>GUEST CONTACTS</h3>
</div>

<table class="table users">
        <thead>
       
            <th>Id</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>action</th>
         </thead>
        <?php
               
                $query="SELECT * FROM tblcontact";
                $result= $conn->query($query);

                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['fullname'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['message'];?></td>
                            <td><a href='contact.php?delete=<?= $row['id']; ?>'>Delete</a></td>
                        </tr>
                        <?php
                    }
                }
                else{
                    echo "No Inquiries";
                }

            ?>
        
    </table>
  
</body>
</html>
<?php

if(isset($_GET['delete'])){
    
    $the_contact_id = $_GET['delete'];
    
    $query  = "DELETE FROM tblcontact WHERE id = {$the_contact_id} ";
    $delete_query = mysqli_query($conn,$query);
    
    header("Location: contact.php");
    exit();
    

    
}
   ?>