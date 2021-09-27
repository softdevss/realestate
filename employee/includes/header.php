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
       <?php include "navbar.php" ?>
        </div>

        </body>

        <?php 

include_once 'includes/footer.php';

?>
        </html>




