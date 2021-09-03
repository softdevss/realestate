<?php include "includes/header.php"; ?>

|<?php 
 include "../includes/dbconnect.php"; 
if(isset($_POST['submit'])){
    
  $date = $_POST['date'];
  $pcv_no = $_POST['pcvNo'];
  $fullname = $_POST['fullname'];
       
  $particulars = $_POST['particulars'];
  $amount = $_POST['amount'];

    
    
$query = "INSERT INTO voucher (date, pcv_no, fullname, particulars, amount ) ";
$query .= "VALUES('{$date}','{$pcv_no}','{$fullname}','{$particulars}','{$amount}' ) ";

$create_user_query = mysqli_query($conn, $query);

if(!$create_user_query){

	die('QUERY FAILED'. mysqli_error($conn));

}else{


}

}

?>

<form action="add_voucher.php" method="post" enctype="multipart/form-data">

<section class="large-container">
		
				
				<div class="form-container-1 form-con">
				
					
						<div class="input-container">
							<label>Date</label>
							<input type="date" class="field size1" name="date" required="required" />
						</div>	
						
						<div class="input-container">
							<label>PCV No.</label>
							<input type="text" class="field size1" name="pcvNo" required="required" />
						</div>	

						<div class="input-container">
							<label>Fullname</label>
							<input type="text" class="field size1" name="fullname" required="required" />
						</div>

						<div class="input-container">
							<label>Particulars</label>
							<input type="text" class="field size1" name="particulars" required="required" />
						</div>

						
						<div class="input-container">
							<label>Amount</label>
							<input type="text" class="field size1" name="amount" required="required"/>
						</div>

						<div>
							<input class="btn btn-primary" type="submit" name="submit" value="Submit">
						</div>
						
				</div>	
	</section>
           
            <?php include "includes/navbar.php"; ?>

</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script> 
        <script src="./menu.js"></script>
</html>
