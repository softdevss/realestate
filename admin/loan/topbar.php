<!-- <style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style> -->


<header class="header">
            <div class="header__container">
                <img src="../assets/img/admin-sakura.jpg" alt="ADMIN" class="header__img">
               
                <?php $nameHolder = $_SESSION['nameHolder']; ?>
                <a href="../admin_home.php" class="header__logo"> <span></span> <?php echo $nameHolder ?></a>
            
                <h5></h5>
               
            
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i style="color:#fc5c9c;" class='bx bx-menu' id="header-toggle"></i>
                </div>

            </div>
            


            <meta content="" name="descriptison">
  <meta content="" name="keywords">

  

 







        </header>

<!-- <nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<span class="fa fa-money-bill-wave"></span>
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b>Loan Management System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav> -->