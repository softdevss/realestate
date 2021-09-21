<?php include "includes/header.php" ?>
<?php include "includes/navbar.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
    
<body>



<form action="" method="GET">


<table class="table users">
              
               <thead>
                   <th>VOUCHER ID</th>
                   <th>Date</th>
                   <th>PCV no.</th>
                   <th>Fullname</th>
                   <th>Particulars</th>
                   <th>Amount</th>    
                   <th>Actions</th>
                            
               </thead>
               <tbody>
                    <?php
                    $query = "SELECT * FROM tblvoucher ORDER by voucher_id DESC ";    
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>   
               <?php while ($row = $result->fetch_assoc()) { ?>
                   <tr>
                   <td data-label="Date"><?= $row['voucher_id']; ?></td>
                       <td data-label="Date"><?= $row['date']; ?></td>
                       <td data-label="PCV no."><?= $row['pcv_no'];?></td>
                       <td data-label="Fullname"><?= $row['fullname']; ?></td>
                       <td data-label="Particulars NO"><?= $row['particulars']; ?></td>
                       <td data-label="Amount"><?= $row['amount']; ?></td>
                     
               
                      <td><a href="javascript:void(0)" class="btn-delete" href='view_voucher.php?delete=<?= $row['voucher_id']; ?>'>Delete</a></td>
                   </tr>
                  
               <?php } ?>   
           </tbody>
   </table>

   <?php 

if(isset($_GET['delete'])){
    
    $the_voucher_id = $_GET['delete'];
    
    $query  = "DELETE FROM tblvoucher WHERE voucher_id = {$the_voucher_id} ";
    $delete_query = mysqli_query($conn,$query);
    
    header("Location: view_voucher.php");
    exit();
    

    
}
   ?>
              <!-- DELETE CONTACT SCRIPT -->
<script>

        $(document).ready(function () {

        $('.btn-delete').on('click', function(e){

            e.preventDefault();

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            var deleteid = data[0];
            

            swal({
                title: "Are you sure to delete this voucher?",
                icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            
            $.ajax({
                type: "GET",
                url: "./view_voucher.php", 
                data: {
                    "delete":1,
                    "delete": deleteid,
                },
                success: function(result){
                swal({
                    title: "Successfully Account Deleted!",
                    icon: "success",
                }).then((result) => {
                    location.reload();
                });
            }
        });

        } 

        });
        });

        });

</script>





</body>
</html>