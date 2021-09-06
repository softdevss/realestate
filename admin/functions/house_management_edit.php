<?php
	include_once './includes/header.php';
	include_once './includes/navbar.php';
	
	include_once '../../includes/dbprocess.php';

	if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	$select = mysqli_query($conn,"SELECT * FROM houses WHERE house_id = '$id'") or die(mysqli_error($conn));
	$selresult = mysqli_fetch_array($select);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>


				
					
					<form action="house_management_edit.php?id=<?php echo $selresult['house_id'] ?>" method="post" enctype="multipart/form-data">
						
						<div class="form">
  						
								<p>
									
									<label>Property Type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="House_type" value="<?php echo $selresult['house_type']; ?>" required="required" />
								</p>
								
								<p>
									<span class="req">Property Image</span>
									<label>House Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" value="<?php echo $selresult['image']; ?>" />
								</p>
								<p>
									
									<label>Property Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" value="<?php echo $selresult['rent_cost']; ?>" required="required" />
								</p>
								<p>
									
									<label>Property Location <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="location" value="<?php echo $selresult['location']; ?>" required="required" />
								</p>
								<p>
									
									<label>Location Description <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="desc" value="<?php echo $selresult['location_description']; ?>" required="required" />
								</p>
								<p>
									
									<label>Property Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" value="<?php echo $selresult['max_capacity']; ?>" required="required" />
								</p>	
							
						</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="UPDATE" name="send" />
						</div>
						

<?php
                        include_once '../../includes/dbprocess.php';
                        $house_id = $_GET['id'];
							if(isset($_POST['send'])){

								$house_type = $_POST['House_type'];
								
								$rent_cost = $_POST['hire_cost'];
								$location = $_POST['location'];
								$location_description = $_POST['desc'];
								$max_capacity = $_POST['capacity'];
								
								
								$qr = "UPDATE houses SET house_type='$house_type', rent_cost='$rent_cost',location='$location' , location_description='$location_description', max_capacity='$max_capacity' WHERE house_id = '$house_id'";
								$res =mysqli_query($conn,$qr) or die(mysqli_error($conn));
								if($res){
									echo "<script type = \"text/javascript\">
											alert(\"Property Updated successfully\");
											window.location = (\"../house_management.php\")
											</script>";
									}
								else 
								{
									echo "<script type = \"text/javascript\">
											alert(\"Property not Updated. Try again.\");
											window.location = (\"../house_management.php\")
											</script>";
								}
							}
						?>
					</form>
					
			
			
		
					
					<div class="box-content">
						<a href="../house_management.php" class="add-button"><span>View Available Properties</span></a>
						<div class="cl">&nbsp;</div>
						
						
						
						<!-- Sort --
						
						
					
			
		


	
</body>
</html>