<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>RCY Real Homes</title>
    </head>

    <body>
<center>
	
	<h1> User Page</h1>

	<h3>

		<?php

		session_start();

        if(!isset($_SESSION['user_login']))
        {
            header("location: ../index.php");
        }

        if(isset($_SESSION['admin_login']))
        {
            header("location: ../admin/admin_home.php");

        }

        if(isset($_SESSION['employee_login']))
        {
            header("location: ../employee/employee_home.php");
        }

        if(isset($_SESSION['user_login'])){

            ?>
           <section class="caption">
				<h2 class="caption" style="text-align: center"><font color="blue">This is The Best Place To Find A Property of Your Choice</font></h2>
                <h2 class="title"><a href="#">Welcome Client:</a></h2>
        <?php
        echo $_SESSION['user_login'];
        }

		
		
        ?>
    </h3>
    <a href="../logout.php">Logout</a>
	


				
				<h3 class="properties" style="text-align: center"><font color="purple">Different Types of Properties At Your Fingertip. Book Now</font></h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include '../connection.php';
						$sel = "SELECT * FROM houses WHERE status = 'Available'";
						$rs = $connection->query($sel);
						while($rws = $rs->fetch_assoc()){

					
?>
						
				<li>
					<a href="book_House.php?id=<?php echo $rws['house_id'] ?>">
						<img src="../house_images/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo ''.$rws['rent_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_house.php?id=<?php echo $rws['house_id'] ?>"><?php echo 'Property Type: '.$rws['house_type'];?></a>
						</h1>
						<h2><font color="purple">Location:</font> <span class="property_size"><?php echo $rws['location'];?></span></h2>
						<?php
				}
			?>
						

					</div>
				</li>
</center>

		</body>
        </html>
