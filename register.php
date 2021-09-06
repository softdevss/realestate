<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/main-design.css">
    <title>RCY Real Homes</title>
    </head>

       

    <body>
            <div class="split-screen">
                <img src="./assets/img/gatercy.jpg" alt="">
                <div class="left">
                    <section class="copy">
                        <h2>Explore on our properties</h2>
                        <p>Over 100 properties around the nation</p>
                    </section>

                </div>
                <div class="right">
                            <form action="">
                                <section class="copy">
                                    <h2>Sign up</h2>
                                    
                                </section>
                                <div class="login-container">
                                        <p>already have an account? <a href="index.php">Login</a></p>
                                    </div>
                                <div class="input-container name">
                                    <label for="fname">Fullname</label>
                                    <input type="text"  id="fname" name="fname">
                                </div>
                                <div class="input-container email">
                                    <label for="email">Email</label>
                                    <input type="email"  id="email" name="email">
                                </div>
                                <div class="input-container password">
                                    <label for="password">Password</label>
                                    <input type="password"  id="password" name="password" placeholder="Must be at least 6 characters">
                                    <i class='bx bx-hide'></i>
                                </div>
                               
                                <div class="input-container cta">
                                        <button class="signup-btn">Sign up </button>
                                </div>
                                <section class="copy-legal">
                                    <p>By countinuing, you accept to agree out <br>
                                     <a href="">Privacy policy</a>&amp; <a href="">Terms of service</a></p>
                                </section>
                            </form>

                </div>

            </div>




                <div class="image">

                </div>







    	<!-- <form method="post">

    		<div class="">
    			<label class="">Username</label>
    			<div class="">
    				<input type="text" name="txt_username" class="" placeholder="Enter Username"/>
    			</div>
    		</div>

    		<div class="">
    			<label class="">Email</label>
    			<div class="">
    				<input type="text" name="txt_email" class="" placeholder="Enter Email"/>
    			</div>
    		</div>

    		<div class="">
    			<label class="">Password</label>
    			<div class="">
    				<input type="text" name="txt_password" class="" placeholder="Enter Password"/>
    			</div>
    		</div>

    		<div class="">
    			<label class="">Select Type</label>
    			<div class="">
    				<select class="" name="txt_role"> 
    					<option value="" selected="selected">--Select Role--</option>
    					<option value="employee">Employee</option>
    					<option value="user">User</option>
    				</select>
    			</div>
    		</div>


    		<div class="">
    			<div class="">
    				<input type="submit" name="btn_register" class="" value="Register">

    		</div>
    	</div>

    		<div class="">
    			<div class="">
    		You have a account register here? <a href="index.php"><p class="text-info">Login</p></a>
</div>
</div> 
</form>-->

</body>
</html>


	<?php
		require_once "connection.php";

        if(isset($_REQUEST['btn_register']))
   {
    $username =$_REQUEST["txt_username"];
    $email =$_REQUEST["txt_email"];
    $password =$_REQUEST["txt_password"];
    $role =$_REQUEST["txt_role"];

    if(empty($username)){
        $errorMsg[]="Please Enter Username";
    }
    else if(empty($email)){
        $errorMsg[]="Please Enter Email";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMsg[]="Please Enter a Valid Email Address";
    }
    else if(empty($password)){
        $errorMsg[]="Please Enter Password";
    }
    else if(strlen($password) < 6){
        $errorMsg[]="Password must be atleast 6 Characters";
    }
    else if(empty($role)){
        $errorMsg[]="Please Select Role";
    }
    else
    {
        try
    {

        $select_stmt=$db->prepare("SELECT username, email FROM masterlogin
            WHERE username=:uname OR email=:uemail");
        $select_stmt->bindParam(":uname",$username);
        $select_stmt->bindParam(":uemail",$email);
        $select_stmt->execute();
        $row=$select_stmt->fetch(PDO::FETCH_ASSOC);

        if($row["username"]==$username){
            $errorMsg[]="Sorry Username already exists";
        }
        else if($row["email"]==$email){
              $errorMsg[]="Sorry Email already exists";
        }

        else if(!isset($errorMsg))
        {
            $insert_stmt=$db->prepare("INSERT INTO masterlogin(username,email,password,role) VALUES (:uname,:uemail,:upassword,:urole)");
            $insert_stmt->bindParam(":uname",$username);
            $insert_stmt->bindParam(":uemail",$email);
            $insert_stmt->bindParam(":upassword",$password);
            $insert_stmt->bindParam(":urole",$role);

            if($insert_stmt->execute())
            {
                $registerMsg="Register Successfully .... Wait Login Page";
                header("refresh:4;index.php");
            }

        }
    }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}

?>
		

		