
<?php 

include_once 'includes/header.php';


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div class="page-title">
	<h3>PROPERTIES</h3>
</div>
					
						<table class="table users">
							<thead>
								<th ><input type="checkbox" class="checkbox" /></th>
							
								<th>Property id</th>
								<th>Property type</th>
								<th>Cost</th>
								<th>Property Location</th>
								<th>Location Description</th>
								<th>Maximum Capacity</th>
								<th>Property Status</th>
								<th>Property Image</th>
								<th>agent Name</th>
								<th>agent Contact</th>
							
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
								<td><?php echo $row['name'] ?></td>
								<td><?php echo $row['contact'] ?></td>
								
							</tr>
							<?php
								}
							?>
						</table>
				
					
				
					
				
				<!-- End Box -->

		-->
			
			<!-- Sidebar -->
			
	
</body>
</html>