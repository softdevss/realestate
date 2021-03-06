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
</head>
<body>

<div class="page-title">
	<h3>Add new properties</h3>
</div>

					
					<form action="add_house.php" method="post" enctype="multipart/form-data">
						
						<div class="form">
  						
								<p>
									
									<label>Property Type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="House_type" required="required" />
								</p>
								
								<p>
									<span class="req">Property Image</span>
									<label>Property Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required="required" />
								</p>
								<p>
									
									<label>Property Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" required="required" />
								</p>
								<p>
									
									<label>Property Location <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" required="required" />
								</p>
								<p>
									
									<label>Location Description <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="desc" required="required" />
								</p>
								<p>
									
									<label>Property Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity"required="required" />
								</p>
								<p>
									
									<label>agent Name <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="name" required="required" />
								</p>	
								<p>
									
									<label>agent Contact <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="contact" required="required" />
								</p>	
							
						</div>
						
						<div class="cta">
					<a href="house_management.php" class="add-button"><span>View Available Properties</span></a>			
					
					<input type="submit" class="sumit-btn" value="submit" name="send" />
						</div>
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../house_images/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								
								
								
								$house_type = $_POST['House_type'];
								
								$rent_cost = $_POST['hire_cost'];
								$name = $_POST['name'];
								$contact = $_POST['contact'];
								$location = $_POST['location'];
								$location_description = $_POST['desc'];
								$max_capacity = $_POST['capacity'];
								
								
								$qr = "INSERT INTO houses (house_type,image,rent_cost,location,location_description,max_capacity,name, contact,status) 
													VALUES ('$house_type','$image','$rent_cost','$location','$location_description','$max_capacity','$name','$contact','Added')";
								$res =mysqli_query($conn,$qr) or die(mysqli_error($conn));
								if($res>0){
									echo "<script type = \"text/javascript\">
											alert(\"Property added successfully\");
											window.location = (\"add_house.php\")
											</script>";
									}
								}
								else 
								{
									echo "<script type = \"text/javascript\">
											alert(\"Property not added. Try again.\");
											window.location = (\"add_house.php\")
											</script>";
								}
							}
						?>
				</div>

			
		
				
					
			
			

	
</body>
</html>