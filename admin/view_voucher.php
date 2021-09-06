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

<form action="view_voucher.php" method="POST">
<table class="table users"  >
              
               <thead>
                   <th>Date</th>
                   <th>PCV no.</th>
                   <th>Fullname</th>
                   <th>Particulars</th>
                   <th>Amount</th>    
                   <th>Actions</th>                
               </thead>
               <tbody>
                    <?php
                    $query = "SELECT * FROM voucher ";    
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>   
               <?php while ($row = $result->fetch_assoc()) { ?>
                   <tr>
                       <td data-label="Date"><?= $row['date']; ?></td>
                       <td data-label="PCV no."><?= $row['pcv_no'];?></td>
                       <td data-label="Fullname"><?= $row['fullname']; ?></td>
                       <td data-label="Particulars NO"><?= $row['particulars']; ?></td>
                       <td data-label="Amount"><?= $row['amount']; ?></td>
                 
                       <td data-label="ACTIONS">
                       <a href="javascripit:void(0)" class="delete-confirm"><i id="trash" class="fas fa-trash-alt"></i></a>
                       </td> 
                   </tr>
                  
               <?php } ?>   
           </tbody>
   </table>
   <script>

$(document).ready(function () {

    $('.delete-confirm').on('click', function(e){

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
            type: "POST",
            url: "view_voucher.php", 
            data: {
                "delete_btn_confirm":1,
                "delete_id_confirm": deleteid,
            },
         success: function(result){
            swal({
                title: "Successfully Voucher Deleted!",
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

<?php

if(isset($_POST['delete_btn_confirmd'])){
    $voucher_id = $_POST['delete_id_confirm'];

    $sqlforVoucher = "DELETE FROM `voucher` WHERE voucher_id =  ";
  
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sqlforVoucher)){
        echo "QUERY FAILED" . mysqli_error($conn);
    }else{
        mysqli_stmt_bind_param($stmt,"s",$voucher_id);
        mysqli_stmt_execute($stmt);
    }
}

?>


</body>
</html>