 <?php  ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link href="../assets/css/main-design.css" rel="stylesheet">



  


    <title>RCY REAL HOMES</title>
    <style>
    a{
    text-decoration: none!important;
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php
   
 
    include "../includes/dbprocess.php";
    
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
