<?php
    include_once './includes/dbprocess.php';

    if(isset($_SESSION['nameHolder'])){
        if($_SESSION['usertypeHolder'] == 'User'){
            header("Location: ../user/user_home.php");
        }
        else if($_SESSION['usertypeHolder'] == 'Employee'){
            header("Locaton: ../employee/employee_home.php");
        }else{
            header("Location: ../admin/admin_home.php");
        }
    }else{
       // header("Location: ../index.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="scripts/jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="RALPH" >
    <link rel="shortcut icon" href="assets/ico/favicon.png">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

    <title>RCY Real Homes</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="css/animate-custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link href="css/stylingsheet.css" rel="stylesheet">
	<!---- font icons -->
    
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	  <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>


	<!---Client Review-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!--Sweetalert-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">RCY REAL HOMES</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a  href="properties.php">Lands</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="" data-toggle="modal" data-target="#exampleModal">SIGN IN</a></li>
      </ul>
    </nav>
 
<!-- Modal === --->


<!-- Modal -->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      
			<div class="modal-dialog modal-flex">
				<div class="modal-content form-width">
				<div class="form-box">
            <div>
                <div class="logo-con">
                  <img src="logo.jpg">
                </div>
            </div>
          
          
            <div class="radio-wrapper">
            	<form action="./includes/dbprocess.php" method="POST">
              <div class="container-rbn">

               	
  					<input type="radio" class="radio__input" value="User" name="myradio" id="radio1">
                  
                    <input class="radio__input" value="Employee" type="radio" name="myradio" id="radio2">
                    <label class="radio__label " for="radio2">AGENT</label>
                    <input class="radio__input" value="Admin" type="radio" name="myradio" id="radio3">
                    <label class="radio__label " for="radio3">ADMIN</label>
     
               
             </div>
           

            <div class="input-group">
                <input type="text" class="input-field"  name="employeeid" placeholder="EMAIL"
                required>
                <input type="password" class="input-field" name="password" placeholder="PASSWORD"
                required>
                <!--<span>Don't have account ? <a href="register.php" >Sign up here</a></span>-->
                <button type="submit" name="login" class="submit-btn" style="color:white">SIGN IN</button>
                
                 

            </form>
           </div>     
        </div>
		
				</div>
			</div>
		</div>
	
    </div>
  </div>

  
		<!-- ==== HEADERWRAP ==== -->
	    <div id="headerwrap" class="cover-background" id="home" name="home">
				<div class="header-content">
					<h3>Dream <br><span>Home</span> is <br>Right Here</h3>
				</div>
	    </div>
        
      

        <!-- /headerwrap -->

		<!-- ==== GREYWRAP ==== -->
		 <div id="greywrap">
			<div class="card-flex">
				<div class=" callouts call">
					<span class="icon icon-stack"></span>
					<h2>Our Mission</h2>
					<p class="about-title">Our mission is to provide exceptional services and customer satisfaction by fulfilling their need of residential houses. We aim to be more results oriented yet with a happy working environment. </p>
				</div>
					
				<div class=" callouts call">
					<span class="icon icon-eye"></span>
					<h2>Our Vision</h2>
					<p class="about-title">By 2025 our company will be the number one real estate developer in Zamboanga City, and will not only cater residential housing but as well as engaging in the development of offices, apartments, hotels and mixed – use projects by branching out our services and creating eco friendly yet affordable service to our customers. </p>
				</div>
				
				<div class="  callouts call">
					<span class="icon icon-heart"></span>
					<h2>Our Sovereignity</h2>
					<p class="about-title">Our customers are our top priority. We continuously offer the newest design in houses, providing them options to fill in their needs. We only use high quality standard materials yet providing affordable and budget payment terms </p>
				</div>
			</div>
		</div>
		
    <div class="vid-wrapper">
      <div class="vid-container">
         <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fgmanews%2Fvideos%2F1096893304403585%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
      </div>        
    </div> 
      <!-- ==== ABOUT ==== -->
		<br>
		
			<div class="about-flex">
				
					<img src="assets/img/about_rcy.jpg" alt="">
				
				<div class="img-content">
					<h3>About our company</h3>
					<p>is a privately owned real estate development company engaged in development of purely residential houses specializing in low cost and mid cost housing projects. In addition, we also offer Lot only option to our clients. we started our company last 2016 in the Latin Capital, Zamboanga City. 
						Founded by a true blooded Zamboangeño entrepreneurs who wanted to fulfill the needs of fellow Zamboangeños of affordable but high standard quality housing. 
						Guided by our strong faith, good family values and genuine positive attitude in real estate, we are highly driven to satisfy our costumers, enriching the community by giving the dream homes they deserve
</p>
					<button class="fb-button"> See on facebook</button>
				</div>
			
			</div>
  

		
		<section class="section-divider textdivider divider1">
			<div class="container">
				<h1>DESIGN EXPAND BOUNDARIES</h1>
				<hr>
				<p>Focusses on building ties and working closely with members of the community.
</p>
			</div><!-- container -->
		</section><!-- section -->

			<article class="services">
						<div class="services-content">
							<h3>GOOD WORKING RELATIONSHIP</h3>
							<P>Our passionate people will readily assist our client inquiries guiding them to choose their perfect dream house. <br> Trust, teamwork, communication and respect are keys to our effective working relationships and we Develop positive relationships with clients we interact with.</P>
						</div>
						
			</article>

								<div class="wrapper-body">
								<div class="wrapper">
									<div class="table basic">
									<div class="price-section">
										<div class="price-area">
										<div class="inner-area">
										
											<span class="price">01</span>
										</div>
										</div>
									</div>
									<div class="package-name">	Exemptional customer service </div>
									<ul class="features">
										<li>
										<span class="list-name">In House Sales Support</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
										<li>
										<span class="list-name">Monthly Construction Updates </span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
										<li>
										<span class="list-name">Dedicated Customer Care Team</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
										<li>
										<span class="list-name">Lifetime Template Updates</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
                    
										</li>
									</ul>
                  
									<div class="btn"><button>GET STARTED</button></div>
									</div>
									<div class="table premium">
									<div class="ribbon"><span>THE BEST</span></div>
									<div class="price-section">
										<div class="price-area">
										<div class="inner-area">
											
											<span class="price">02</span>
										</div>
										</div>
									</div>
									<div class="package-name">	Affordable houses  </div>
									<ul class="features">
										<li>
										<span class="list-name">Wide range of project <br> houses to choose</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
										<li>
										<span class="list-name"> Location wise near city</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
										<li>
										
										</li>
										<li>
										<span class="list-name">Sta. Maria, Guiwan, San <br> Roque and Mercedes </span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
									</ul>
									<div class="btn"><button>GET STARTED</button></div>
									</div>
									<div class="table ultimate">
									<div class="price-section">
										<div class="price-area">
										<div class="inner-area">
										
											<span class="price">03</span>
										</div>
										</div>
									</div>
									<div class="package-name">Budget friendly options </div>
									<ul class="features">
										<li>
										<span class="list-name">Affordable payment terms</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
										<li>
										<span class="list-name">Offers In-house financing</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
										<li>
										<span class="list-name">Discounts for deferred cash <br> and spot cash payment</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
										<li>
										<span class="list-name">Zero Interest equities for 24mos</span>
										<span class="icon check"><i class="fas fa-check"></i></span>
										</li>
									</ul>
									<div class="btn"><button>GET STARTED</button></div>
									</div>
								</div>
								</div>




        <!-- <div class="row centered about-title ">
				<div class="col-lg-offset-2 col-lg-12">
					<img class="img-responsive img-fluid" src="assets/img/house.png" alt="">
				</div>
			</div>
		</div> -->


		<!-- ==== SECTION DIVIDER2 -->
		<section class="section-divider textdivider divider2">
			<div class="container text-left">
				<h1>WE BUILD TRUST</h1>
				
		<p>New to this industry we aim to exceed beyond our client <br> expectations by giving them only the best. <br> We value our relationship with our clients to <br> communicate honestly <br> and with excellent communication <br> customer service and attention.</p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== GREYWRAP ==== -->
		<!-- <div id="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 centered">
						<img class="img-responsive img-fluid" src="assets/img/macbooks.png" >
					</div>
					<div class="col-lg-4 about-title">
						<h2>We also have a monitoring application for your accounts</h2>
						<p class="text-justify">Do you want to be one of use? Sure you want, because we are an awesome team. Here we work hard every day for our quality service register now</p>
						<p><a class="register-btn">SIGN UP</a></p>
					</div>					
				</div>
			</div>
			<br>
			<br>
		</div> -->
		
		<!-- ==== SECTION DIVIDER3 -->
		

		<!-- ==== SECTION DIVIDER4 ==== -->
		
	

<!-- ==== CONTACT SECTION ==== -->
<section id="contact" class="contact section-bg">
      <div class="containers" data-aos="fade-up">
	
      <span class="big-circle"></span>

      <div class="form">
        <div class="contact-info">
          <h3 class="title">RCY REALHOMES W</h3>
          <p class="text">
           Your dream home awaits , connect to us for business propossal and talk with us
          </p>

          <div class="info">
            <div class="information">
            
			<p>   <i class='bx bx-location-plus' ></i> Fairland Building 3rd Floor, Unit# 14,Mayor Vitallano Agan Road  , Camino Nuevo, Zamboanga City  
</p>
            </div>
            <div class="information">
            
              <p><i class='bx bx-mail-send' ></i> zambohomesbest@gmail.com</p>
            </div>
            <div class="information">
            
              <p><i class='bx bxs-phone-call' ></i> Tel #: (062) 975-6613 <br> Phone #: (Globe) 0905-345-5749	</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
<!-- insert contact us -->
      <?php
      if(isset($_POST['submit'])){ 
      $server = "localhost";
      $username = "root";
      $password = "";
      $dbname = "rcy";

      $fullname = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      $conn = mysqli_connect($server, $username, $password, $dbname);
      
      $query = "INSERT INTO `tblcontact`(`fullname`, `email`, `phone`, `message`) VALUES ('$fullname','$email','$phone','$message')";
      
      $result = mysqli_query($conn,$query);
      if($result){
        echo '<script type="text/javascript">
        swal("", "Successfully Submitted", "success");
        </script>';
      }
      else{
        echo 'Message not Sent';
      }
     
      mysqli_close($conn);
        
      }
      ?>
          <form action="index.php" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Fullname</label>
              <span>Fullname</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" name="submit">
          </form>
        </div>
      </div>
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
            <p>copyright &copy;2021 RCYHOMES. powered by <br> <span>Software devs PH</span></p>
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
