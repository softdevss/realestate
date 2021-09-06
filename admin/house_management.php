<?php 

include_once 'includes/header.php';
include_once 'includes/navbar.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to approve this Property?")){
	            window.location.href='house_management_approve.php?id='+id;	    
			}
		}
    
		function sureToDelete(id){
			if(confirm("Are you sure you want to delete this Property?")){
				window.location.href='house_management_delete.php?id='+id;
			}
		}
		function sureToEdit(id){
			if(confirm("Are you sure you want to Edit this Property?")){
				window.location.href='house_management_edit.php?id='+id;
			}
		}



	</script>
</head>
<body>

<div class="page-title">
	<h3>Add new properties</h3>
</div>



			
					<table class="table users">
					
						<thead>
								<th></th>
								<th>Property id</th>
								<th>Property type</th>
								
								<th></th>
								<th>Property Location</th>
								<th>Location Description</th>
								<th>Maximum Capacity</th>
								<th>Property Status</th>
								
								<th>Property Image</th>
								<th>agent Name</th>
								<th>agent Contact</th>
								<th>Admin Action</th>
						</thead>		

							
							<?php
								$select = "SELECT * FROM houses";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><?php echo $row['house_id'] ?></h3></td>
								<td><h3><?php echo $row['house_type'] ?></h3></td>
								
								<td><?php echo $row['rent_cost'] ?></td>
								<td><?php echo $row['location'] ?></td>
								<td><?php echo $row['location_description'] ?></td>	
								<td><?php echo $row['max_capacity'] ?></td>	

								<td><?php echo $row['status'] ?></td>
								<td><img class="thumb" src="../house_images/<?php echo $row['image'];?>" width="200" height="200"></td>
								<td><h3><?php echo $row['name'] ?></h3></td>
								<td><h3><?php echo $row['contact'] ?></h3></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['house_id'];?>)" class=""><font color="purple">Accept</font></a>&nbsp;&nbsp;<a href="javascript:sureToDelete(<?php echo $row['house_id'];?>)" class="ico del"><font color="red">Delete</font></a><a href="javascript:sureToEdit(<?php echo $row['house_id'];?>)" class="ico edit"> Edit</a></td>
							</tr>
							<?php
								}
							?>
						</table>
				
				
					
				<!-- End Box -->

		
			<!-- End Content -->
			
			<!-- Sidebar -->
			
	
</body>
</html>