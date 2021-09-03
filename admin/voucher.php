<?php include "includes/header.php"; ?>

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
           
            <?php include "includes/navbar.php"; ?>

</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script> 
        <script src="./menu.js"></script>
</html>
