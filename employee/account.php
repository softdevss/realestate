<?php
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

<?php 

include_once 'includes/header.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../app.js" defer></script>
    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../boxicons/css/boxicons.css">
    
    <link rel="shortcut icon" type="image/png " href="../img/fmsURST.png">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
       <link rel="stylesheet" href="./menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   
   <title>RCY Real Homes</title>
</head>
<style>
.user-naming {
  display: block;
  text-align: center;
  padding: 2rem;
  color: #fff;
}

.user-naming h5 {
  font-weight: normal;
  font-size: 1.4rem;
}

.user-naming i {
  font-size: 4rem;
  color: #fff;
}
    </style>



    <body>





        </body>

        <script src="./menu.js"></script>
        </html>

    
        <main>

             
                    <div class="update-profile">

                    <?php
                            $query = "SELECT p.Employee_ID, p.Fullname, p.Sex, p.ContactNo, p.Email, a.Password FROM tblprofiles p, tblaccounts a  WHERE  a.Fullname = '$nameHolder' AND  p.Fullname = '$nameHolder'";    
                            $stmt = $conn->prepare($query);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $row = $result->fetch_assoc();
                    ?>  
                         <div class="admin-image">
                        <img src="../assets/img/admin-jeremy.jpg" alt="">
                    </div>
                        <div class="heading-name">
                        <h2><?= $row['Fullname']; ?></h2>
                            <small>Admin</small>
                            <button class="btn-open" ><i class="far fa-edit">Edit account</i></button>
                        </div>
                        <div class="information">
                            <div class="profile-body">
                            <small>EMPLOYEE ID</small>
                            <h3><?= $row['Employee_ID']; ?></h3>
                            </div>

                            <div class="profile-body">
                            <small> CONTACT NUMBER</small>
                            <h3><?= $row['ContactNo']; ?></h3>
                         </div>
                         <div class="profile-body">
                            <small>EMAIL</small>
                            <h3><a href= "https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank"><?= $row['Email']; ?></a> </h3>
                          </div>
                            <div class="profile-body">
                            <small>PASSWORD</small>
                          <h3>************</h3>
                          </div>
                          
                        
                     
                        </div>
                    </div>
                    
                    <div class="profile-modal">
                        <div class="profile-bg" style="height:600px;">

                            <div class="heading">
                                <h3>Edit Account</h3>
                                <button  class="close_multi">&times;</button>
                            </div>
                            <div class="small">
                             <h5>Complete the form and save your data</h5> 
                            </div>
        
                            <form action="../includes/dbprocess.php" method="POST">
                            <div class="wrapper">
                            <div class="input-data">
                                <input type="hidden" name = "FullnameOld" value="<?= $row['Fullname']; ?>" required>
                                <input type="text" name = "Fullname" value="<?= $row['Fullname']; ?>" required>
                                <div class="underline">
                        </div>
                        <label>Full name</label>
                            </div>
                            
                        </div>
                        <div class="wrapper">
                            <div class="input-data">
                                <input type="hidden" name = "Emp_IDOld" value="<?= $row['Employee_ID']; ?>" required>    
                                <input type="text" name = "Emp_ID" value="<?= $row['Employee_ID']; ?>" required>
                                <div class="underline">
                        </div>
                        <label>Employee ID</label>
                            </div>
                        </div>
                      
                        <div class="wrapper">
                            <div class="input-data">
                            <input type="text" name = "Password" value="<?= $row['Password']; ?>" required>
                                <div class="underline">
                        </div>
                        <label>Password</label>
                            </div>
                        </div>

                        <div class="wrapper">
                            <div class="input-data">
                            <input type="text" name = "ContactNo" value="<?= $row['ContactNo']; ?>" required>
                                <div class="underline">
                        </div>
                        <label>Contact Number</label>
                            </div>
                        </div>

                        <div class="wrapper">
                            <div class="input-data">
                            <input type="text" name = "Email" value="<?= $row['Email']; ?>" required>
                                <div class="underline">
                        </div>
                        <label>Email</label>
                            </div>
                        </div>


                        <script type="text/javascript">

                            $(document).ready(function(){
                            $("#SEX").val("<?= $row['Sex']; ?>");
    
                            });
                        </script>

                        <div class="wrapper">
                            <div class="input-data">
                           <select name="Sex" id="SEX">
                               <option value="">Sex</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>
                           </select>
                            
                        </div>
                   
                            </div>
                        <div>
                            <div class="input-data">
                            
                        </div>
                      
                            </div>
                            <div class="submite">
                                <div class="data">      
                                 <button  type='submit' name="editadmin" ><i class="fas fa-user-plus"></i> SAVE CHANGES</button>
                            </div>
                           
                                </div>
                        </div>
                        
                                </form>
                        </div>
                        <div class="container">
                            
                        </div>
                        
                    </div>
    
        </main>

        <script>

var modalBtn = document.querySelector('.btn-open');
var modals = document.querySelector('.profile-modal');
var modalCl = document.querySelector('.close_multi')

modalBtn.addEventListener('click' , function(){
    modals.classList.add('profile-actives');
});

modalCl.addEventListener('click', function (){
    modals.classList.remove('profile-actives');
})


</script>
     
<?php 
            if (isset($_SESSION['response']) && $_SESSION['response'] !='') { ?>

            <script>
            swal({
                title: "<?php echo $_SESSION['response']?>",
                icon: "<?php echo $_SESSION['res_type']?>",
                button: "Done",
            });
            </script>
        
            <?php
                unset($_SESSION['response']); }
            ?>
</body>
</html>