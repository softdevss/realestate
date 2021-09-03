<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/main-design.css">
    <link rel="stylesheet" href="./menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./admin-design.css">
    <link rel="stylesheet" href="/styles/admin.css">

    <header class="header">
            <div class="header__container">
                <img src="../assets/img/admin-jeremy.jpg" alt="" class="header__img">
               
                <?php $nameHolder = $_SESSION['nameHolder']; ?>
                <a href="#" class="header__logo"> <?php echo $nameHolder ?></a>
         
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i style="color:#fc5c9c;" class='bx bx-menu' id="header-toggle"></i>
</div>
            </div>
        </header>
<style>
                a{
                    text-decoration: none!important;
                }
            </style>
          
</head>
<body>

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
