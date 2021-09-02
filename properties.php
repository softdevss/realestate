<!DOCTYPE html>
<html lang="en">
<head>
	<title>RCY Real Homes.</title>
	<meta charset="utf-8">
	
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link href="css/stylingsheet.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/main.js"></script>


	
	<!---- font icons -->
    
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	  <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

	
	
<body>
	
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">RCY REAL HOMES</label>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="properties.php">Lands</a></li>
        <li><a href="index.php#reviews">Reviews</a></li>
        <li><a href="index.php#contact">Contact</a></li>
        <li><a href="" data-toggle="modal" data-target="#exampleModal">SIGN IN</a></li>
      </ul>
    </nav>


  <div class="header">
            <div class="banner">
                    <video autoplay muted loop>
                        <source src="assets/videos/RCY.mp4" type="video/mp4" >
                    </video>
                </div>
                <div class="overlay"></div>
                <div class="texts">
                  <h1>Comfortable homes awaits you</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, id!</p>
                  <br>
                  <a href="" class="button">Find out more</a>
                </div>
          </div>

          


	<div class="grid">
	<?php
						include_once './includes/dbprocess.php';
						$sel = "SELECT * FROM houses";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
							
			?>

            			
	
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="house_images/<?php echo $rws['image'];?>" alt="Rome" />
          <div class="card-content">
            <h1 class="card-header"><?php echo 'Property Type: '.$rws['house_type'];?></h1>
			<p><?php echo ''.$rws['rent_cost'];?></p>
		
			<span><?php echo $rws['location'];?></span>
            <p class="card-text">
			<?php echo 'Property Description:</font> '.$rws['location_description'];?>
            </p>
            <button class="card-btn"><a href="registeruser.php">Register/Reservation <span>&rarr;</span></button>
          </div>
  
        </div>
        
      </div>
      
	  <?php
				}
			?>

    </div>
	<!-- ==== SECTION DIVIDER6 ==== -->
		

    <footer>
        <div class="footer-content">
            <h3>RCY REAL HOMES</h3>
            <p>A copyright disclaimer is a statement that claims ownership of original content, or discloses your use of copyrighted materials </p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2021 RCYHOMES. powered by <span>Software devs PH</span></p>
        </div>
    </footer>
    <!-- Modal === --->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		
    <script type="text/javascript" src="assets/js/jquery-func.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/app.js"></script>

	
	

</body>
</html>