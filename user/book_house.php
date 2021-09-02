<?php 

include_once 'includes/header.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Property Details</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<style>
.body
{

}
</style>
<body>
	<div>
		<?php
			
		?>
	</div>

			<br>
			<br>
<!--  end hero section  -->
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include_once '../includes/dbprocess.php';
						$sel= "SELECT * FROM houses WHERE house_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
					    $house_id = $rws['house_id'];
					    $status = $rws['status'];
					    $name = $rws['name'];
					    $contact = $rws['contact'];
							
			?>
				<li>
					<a href="">
						<img class="thumb" src="../house_images/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo ''.$rws['rent_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_house.php?id=<?php echo $rws['house_id'] ?>"><?php echo 'Property Type: '.$rws['house_type'];?></a>
						</h1
						<h2>Location: <span class="property_size"><?php echo $rws['location'];?></span></h2>
						<h3><font color="blue">Property Number: </font><span class="property_size"><?php echo $rws['house_id'];?></span></h3>
						<h3><font color="blue">Status: </font><span class="property_size"><?php echo $rws['status'];?></span></h3>
						<h3><font color="blue">agent Name: </font><span class="property_size"><?php echo $rws['name'];?></span></h3>
						<h3><font color="blue">agent Contact: </font><span class="property_size"><?php echo $rws['contact'];?></span></h3>
						<h3><a href="bookreq.php?id=<?php echo $rws['house_id']?>"><font color="green">BOOK</font></a></h3>
					</div>
					
				</li>
											
								
<br>
<div id= "contacts">
	<p><u><font color="purple">Our Contacts</font></u></p>	
  <p><font size="5px;">Company: </font><font color="purple"><font size="5px;">RCY REALHOMES ZAMBOANGA</font></font></p>
   <p><font size="5px;">Address:</font><font color="purple"><font size="5px;">Fairland Building 3rd Floor, Unit# 14,Mayor Vitallano Agan Road , Camino Nuevo, Zamboanga City</font></font></p>
  <p><font size="5px;">Phone Number: </font><font color="purple"><font size="5px;">096/ 0780885886.</font></font></p>
  <p><font size="5px;">Email:</font><font color="purple"><font size="5px;">zambohomesbest@gmail.com</font></font></p>
  <br>
  <br>


	</div>
			</ul>
			<h2>Location Descriptions: <span class="property_size"> </span></h2>
<?php echo $rws['location_description'];?>
		</div>
		
		
	</section>	<!--  end listing section  -->

</body>
</html>
