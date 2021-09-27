<?php
ob_start();
    include_once '../includes/dbprocess.php';


    if(isset($_SESSION['nameHolder'])){
        if($_SESSION['usertypeHolder'] == 'Admin'){
            header("Location: ../admin/admin_home.php");
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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../app.js" defer></script>
    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../boxicons/css/boxicons.css">
    <link rel="shortcut icon" type="image/png " href="../logo.jpg">
    <link href="./menu.css" rel="stylesheet">
    <link href="./admin-design.css" rel="stylesheet">
    <link href="././styles/admin.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="../assets/css/main-design.css" rel="stylesheet">
    <title>RCY Real Homes</title>

    <style>
        a{
            text-decoration: none !important;
        }
    </style>
    </head>

    <body>



    <header class="header">
            <div class="header__container">
               
               
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
                        <span class="nav__logo-name">Agent</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">SALES</h3>
    
                            <a href="employee_home.php" class="nav__link active">
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

                            <div class="nav__dropdown">
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-user nav__icon' ></i>
                                            <span class="nav__name">CLIENT APPLICATION</span>
                                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                        </a>
        
                                        <div class="nav__dropdown-collapse">
                                            <div class="nav__dropdown-content">
                                                <a href="loan/index.php?page=loans" class="nav__dropdown-item">LOAN LIST</a>
                                                <a href="loan/index.php?page=payments" class="nav__dropdown-item">PAYMENT</a>
                                                <a href="loan/index.php?page=borrowers" class="nav__dropdown-item">BARROWER</a>
                                                <a href="loan/index.php?page=plan" class="nav__dropdown-item">LOAN PLANS</a>
                                                <a href="loan/index.php?page=loan_type" class="nav__dropdown-item">LOAN TYPE</a>
                                            </div>
                                        </div>
                                    </div>
                        

                        <a href="./contact.php" class="nav__link">
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




