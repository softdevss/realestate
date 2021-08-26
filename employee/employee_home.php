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
	
	<h1> Employee Page</h1>

	<h3>

		<?php

		session_start();

        if(!isset($_SESSION['employee_login']))
        {
            header("location: ../index.php");
        }

        if(isset($_SESSION['admin_login']))
        {
            header("location: ../admin/admin_home.php");

        }

        if(isset($_SESSION['user_login']))
        {
            header("location: ../user/user_home.php");
        }

        if(isset($_SESSION['employee_login']))
        {
            ?>
            Welcome,
        <?php
        echo $_SESSION['employee_login'];
        }
        ?>
    </h3>
    <a href="../logout.php">Logout</a>

    <a href="./add_house.php">ADD HOUSE</a>
    <a href="./house_management.php">VIEW PROPERTY</a>
    <a href="../contact.php">View Messages</a>
</center>
		</body>
        </html>
