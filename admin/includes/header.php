<?php
    include_once '../includes/dbprocess.php';


    if(isset($_SESSION['nameHolder'])){
        if($_SESSION['usertypeHolder'] == 'Employee'){
            header("Location: ../employee/employee_home.php");
        }
        else if($_SESSION['usertypeHolder'] == 'User'){
            header("Location: ../user/user_home.php");
        }else{
            //wala ng header kasi nasa admin naman na tong page na to
        }
    }else{
        header("Location: ../index.php");
      
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="./menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  
    <title>RCY Real Homes</title>
    </head>

    <body>


<center>

	<h3>

    </h3>
   
</center>

    <header class="header">
            <div class="header__container">
                <img src="../assets/img/admin-jeremy.jpg" alt="" class="header__img">
               
                <?php $nameHolder = $_SESSION['nameHolder']; ?>
                <a href="#" class="header__logo"> <?php echo $nameHolder ?></a>
            
                <h5></h5>
               
            
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i style="color:#fc5c9c;" class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">Administrator</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">SALES</h3>
    
                            <a href="#" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">DASHBOARD </span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">PROPERTIES</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="./add_house.php" class="nav__dropdown-item">ADD PROPERTIES</a>
                                        <a href="./house_management.php" class="nav__dropdown-item">MANAGE</a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">CLIENTS</span>
                            </a>
                        

                        <a href="../contact.php" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">CLIENTS INQUIRIES</span>
                            </a>
                        </div>
                    
                    


    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">AGENTS</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">COMISSION</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">ADD</a>
                                        <a href="#" class="nav__dropdown-item">REMOVED</a>
                                        <a href="#" class="nav__dropdown-item">MANAGE</a>
                                        <a href="#" class="nav__dropdown-item">UPDATE</a>
                                    </div>
                                </div>

                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">FINANCE</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">REPORTS</span>
                            </a>
                            <a href="database.php" class="nav__link">
                                <i class='bx bx-data nav__icon' ></i>
                                <span class="nav__name">DATABASE</span>
                            </a>
                            <a href="account.php" class="nav__link">
                                <i class='bx bx-user nav__icon' ></i>
                                <span class="nav__name">ACCOUNT</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="../logout.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

		</body>
        <?php 

include_once 'includes/footer.php';

?>
        </html>




