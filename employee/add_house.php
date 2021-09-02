<?php 

include_once 'includes/header.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="../assets/css/main-design.css" type="text/css" media="all" />
</head>
<body>
			<form action="add_house.php" method="post" enctype="multipart/form-data">
					<section class="large-container">
				
						
						<div class="form-container-1 form-con">
  						
							
								<div class="input-container">
									<label>Property Type</label>
									<input type="text" class="field size1" name="House_type" required="required" />
								</div>	
								
								<div class="input-container">
									<label>Property Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" required="required" />
								</div>	

								<div class="input-container">
									<label>Property Location <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" required="required" />
								</div>

								<div class="input-container">
									<label>Property Image</label>
									<input type="file" class="field size1" name="image" required="required" />
								</div>
								
						</div>
						<?php
                            $query = "SELECT Fullname FROM tblaccounts a  WHERE  a.Fullname = '$nameHolder'";    
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $row = $result->fetch_assoc();
							?>

						<div class="form-container-2 form-con">	

								<div class="input-container">
									<label>Location Description <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="desc" required="required"/>
								</div>
							
								<div class="input-container">
									<label>Property Capacity</label>
									<input type="text" class="field size1" name="capacity"required="required"/>
								</div>		
								<div class="input-container">
									<label>Agent Name</label>
									<input type="text" class="field size1" name="name"required="required"/>
								</div>		
    						<div class="input-container">	
									<label>Agent Contact </label>
									<input type="text" class="field size1" name="contact" required="required"/>
								</div>	
						</div>	
						
						
						
					
			</section>
			<div class="cta">
							
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
			

		
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					<div class="box-content">
						<a href="house_management.php" class="add-button"><span>View Available Properties</span></a>
						<div class="cl">&nbsp;</div>

						
						
						
						<!-- Sort -->
						
						
					</div>
					<br>
					<br>
					<a href="add_property.php"><button>ADD PROPERTY TO HOME PAGE</button></a>
					<br>
					<br>
					<br>
					<a href="manage_property.php"><button>MANAGE HOME PAGE PROPERTIES</button></a>
				
		
		
	


	
</body>
</html>