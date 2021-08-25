<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>RCY Real Homes</title>
    </head>

    <body>
    	<form method="post" class="form-horizontal">

    		<div class="form-group">
    			<label class="col-sm-3 control-label">Username</label>
    			<div class="col-sm-6">
    				<input type="text" name="txt_username" class="form-control" placeholder="Enter Username"/>
    			</div>
    		</div>

    		<div class="form-group">
    			<label class="col-sm-3 control-label">Email</label>
    			<div class="col-sm-6">
    				<input type="text" name="txt_email" class="form-control" placeholder="Enter Email"/>
    			</div>
    		</div>

    		<div class="form-group">
    			<label class="col-sm-3 control-label">Password</label>
    			<div class="col-sm-6">
    				<input type="text" name="txt_password" class="form-control" placeholder="Enter Password"/>
    			</div>
    		</div>

    		<div class="form-group">
    			<label class="col-sm-3 control-label">Select Type</label>
    			<div class="col-sm-6">
    				<select class="form-control" name="txt_role"> 
    					<option value="" selected="selected">--Select Role--</option>
    					<option value="employee">Employee</option>
    					<option value="user">User</option>
    				</select>
    			</div>
    		</div>


    		<div class="form-group">
    			<div class="col-sm-offset-3 col-sm-9 m-t-15">
    				<input type="submit" name="btn_register" class="btn btn-primary" value="Register">

    		</div>
    	</div>

    		<div class="form-group">
    			<div class="col-sm-offset-3 col-sm-9 m-t-15">
    		You have a account register here? <a href="index.php"><p class="text-info">Login</p></a>
</div>
</div>
</form>

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
		

		