<?php
    include '../includes/dbprocess.php';
    include './includes/header.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
   
    <table class="table">
        <tr>
            <td>Id</td>
            <td>Fullname</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Message</td>
            <td>Delete</td>
        </tr>
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