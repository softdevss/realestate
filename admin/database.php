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


.activestat {
  background: green;
  padding: .6rem 1.2rem;
  border-radius: 6px;
  color: #fff;
  font-weight: 600;
}

.inactivestat {
  background: #6d1717;
  padding: .6rem .9rem;
  border-radius: 6px;
  color: #fff;
  font-weight: 600;
}

</style>

    <body>


<center>

    <h3>

    </h3>
   
</center>

    <header class="header">
            <div class="header__container">
               
               
                <?php $nameHolder = $_SESSION['nameHolder']; ?>
                <a href="#" class="header__logo"> <?php echo $nameHolder ?></a>
            
                <h5></h5>
               
            
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

        <script src="./menu.js"></script>
        </html>

<body>
     


        <main> 

        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                    </div>
                </div>
            </div>

            <div class="selector"  >
                <div class="inner-select">
                    <select name="table" id="table-selector" required>
                        <option value="" disabled selected> SELECT OPTION HERE</option>
                        <option value="tblaccounts-default">ACCOUNT</option>
                        <option value="tblprofiles-default">PROFILE</option>
                    </select>
                  
                </div>
                <div class="select-modal">
                    <button data-modal-target="#modal" class="modal-btn"><i class="fas fa-user-plus"></i> <span>ADD USER</span> </button>
                </div>
              
            </div>

            <script>
                $(function() {
            $('#table-selector').change(function(){
                $('.tables').hide();
                $('#' + $(this).val()).show();
            });
            });
             </script>

            
            
            <script>
                $(function() {
            $('#table-sorter-profileD').change(function(){
                $('.tables').hide();
                $('#' + $(this).val()).show();
                var drpInsertMerge = document.getElementById("table-sorter-profileD");
                drpInsertMerge.selectedIndex = 0;
            });
            });
             </script> 
          
            <div id="tblprofiles-default" class="tables" style="display: none">
            <?php
            $query = "SELECT * FROM tblprofiles WHERE NOT Position = 'Admin'";    
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            ?>   
            
            <table class="table users"  >
               
                <thead>
                    
                    <th>EMPLOYEE ID</th>
                    <th>FULLNAME</th>
                    <th><select name="table-profiles" id="table-sorter-profileD" required>
                        <option value="">SEX</option>
                        <option value="tblprofiles-Male">MALE</option>
                        <option value="tblprofiles-Female">FEMALE</option>
                      </select></th>
                    <th>CONTACT NO</th>
                    <th>EMAIL</th>
                    <th>DATE CREATED</th>
                    <th>DATE UPDATED</th>
                    <th>ACTIONS</th>
                   
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td data-label="EMPLOYEE-ID"><?= $row['Employee_ID']; ?></td>
                        <td data-label="FULL NAME"><?= $row['Fullname'];?></td>
                        <td data-label="SEX"><?= $row['Sex']; ?></td>
                        <td data-label="CONTACT NO"><?= $row['ContactNo']; ?></td>
                        <td data-label="EMAIL"><?= $row['Email']; ?></td>
                        <td data-label="DATE CREATED"><?= $row['Date_Created']; ?></td>
                        <td data-label="DATE UPDATED"><?= $row['Last_Updated']; ?></td>
                        <td data-label="ACTIONS">
                        <a href="javascripit:void(0)" class="delete-confirm"><i id="trash" class="fas fa-trash-alt"></i></a>
                        </td> 
                    </tr>
                   
                <?php } ?>   
            </tbody>
    </table>
</div>         




            <script>
                $(function() {
            $('#table-sorter-profileM').change(function(){
                $('.tables').hide();
                $('#' + $(this).val()).show();
                var drpInsertMerge = document.getElementById("table-sorter-profileM");
                drpInsertMerge.selectedIndex = 0;
            });
            });
             </script> 
          
            <div id="tblprofiles-Male" class="tables" style="display: none">
            <?php
            $query = "SELECT * FROM tblprofiles WHERE Sex = 'Male' AND NOT Position = 'Admin'";    
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            ?>   
            
            <table class="table users"  >
               
                <thead>
                    
                    <th>EMPLOYEE ID</th>
                    <th>FULLNAME</th>
                    <th><select name="table-profiles" id="table-sorter-profileM" required>
                        <option value="">SEX</option>
                        <option value="tblprofiles-Male">MALE</option>
                        <option value="tblprofiles-Female">FEMALE</option>
                      </select></th>
                    <th>CONTACT NO</th>
                    <th>EMAIL</th>
                    <th>DATE CREATED</th>
                    <th>DATE UPDATED</th>
                    <th>ACTIONS</th>
                   
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td data-label="EMPLOYEE-ID"><?= $row['Employee_ID']; ?></td>
                        <td data-label="FULL NAME"><?= $row['Fullname'];?></td>
                        <td data-label="SEX"><?= $row['Sex']; ?></td>
                        <td data-label="CONTACT NO"><?= $row['ContactNo']; ?></td>
                        <td data-label="EMAIL"><?= $row['Email']; ?></td>
                        <td data-label="DATE CREATED"><?= $row['Date_Created']; ?></td>
                        <td data-label="DATE UPDATED"><?= $row['Last_Updated']; ?></td>
                        <td data-label="ACTIONS">
                        <a href="javascripit:void(0)" class="delete-confirm"><i id="trash" class="fas fa-trash-alt"></i></a>
                        </td> 
                    </tr>
                   
                <?php } ?>   
            </tbody>
    </table>
</div>


            <script>
                $(function() {
            $('#table-sorter-profileF').change(function(){
                $('.tables').hide();
                $('#' + $(this).val()).show();
                var drpInsertMerge = document.getElementById("table-sorter-profileF");
                drpInsertMerge.selectedIndex = 0;
            });
            });
             </script> 
          
            <div id="tblprofiles-Female" class="tables" style="display: none">
            <?php
            $query = "SELECT * FROM tblprofiles WHERE Sex = 'Female' AND NOT Position = 'Admin'";    
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            ?>   
            
            <table class="table users"  >
               
                <thead>
                    
                    <th>EMPLOYEE ID</th>
                    <th>FULLNAME</th>
                    <th><select name="table-profiles" id="table-sorter-profileF" required>
                        <option value="">SEX</option>
                        <option value="tblprofiles-Male">MALE</option>
                        <option value="tblprofiles-Female">FEMALE</option>
                      </select></th>
                    <th>CONTACT NO</th>
                    <th>EMAIL</th>
                    <th>DATE CREATED</th>
                    <th>DATE UPDATED</th>
                    <th>ACTIONS</th>
                   
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td data-label="EMPLOYEE-ID"><?= $row['Employee_ID']; ?></td>
                        <td data-label="FULL NAME"><?= $row['Fullname'];?></td>
                        <td data-label="SEX"><?= $row['Sex']; ?></td>
                        <td data-label="CONTACT NO"><?= $row['ContactNo']; ?></td>
                        <td data-label="EMAIL"><?= $row['Email']; ?></td>
                        <td data-label="DATE CREATED"><?= $row['Date_Created']; ?></td>
                        <td data-label="DATE UPDATED"><?= $row['Last_Updated']; ?></td>
                        <td data-label="ACTIONS">
                        <a href="javascripit:void(0)" class="delete-confirm"><i id="trash" class="fas fa-trash-alt"></i></a>
                        </td> 
                       
                    </tr>
                   
                <?php } ?>   
            </tbody>
    </table>
</div>



            <script>
                $(function() {
            $('#table-sorter-accountsD').change(function(){
                $('.tables').hide();
                $('#' + $(this).val()).show();
                var drpInsertMerge = document.getElementById("table-sorter-accountsD");
                drpInsertMerge.selectedIndex = 0;
            });
            });
             </script>              

    <div id="tblaccounts-default" class="tables" style="display: none">
    <?php
            $query = "SELECT * FROM tblaccounts WHERE Status = 'ACTIVE' AND NOT User_Type = 'Admin'";    
            $stmt = $conn->prepare($query);
              $stmt->execute();
              $result = $stmt->get_result();
        ?> 
        <table class="table"  >
            <thead>
                <th>EMPLOYEE ID</th>
                <th>FULL NAME</th>
                <th>USER TYPE</th>
                <th>PASSWORD</th>
                <th>
                <form action="database.php" method="POST">
                <select name="table-accounts" id="table-sorter-accountsD" required>
                    <option value="">STATUS</option>
                    <option value="tblaccounts-Active">ACTIVE</option>
                    <option value="tblaccounts-Non-Active">INACTIVE</option>
                  </select></th>
                </form>
                <th>ACTIONS</th>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td data-label="EMPLOYEE ID"><?= $row['Employee_ID']; ?></td>
                    <td data-label="FULLNAME"><?= $row['Fullname']; ?></td>
                    <td data-label="USER-TYPE"><?= $row['User_Type']; ?></td>
                    <td data-label="PASSWORD"><?= $row['Password']; ?></td>
                    <td data-label="STATUS"><small class='activestat'><?= $row['Status']; ?></small></td>
                    <td data-label="ACTIONS">
                    <a href="javascripit:void(0)" class="deactivate-confirm"><i id="edit" class="fas fa-toggle-on"></i></a><span></span>
                    <a href="javascripit:void(0)" class="reset-confirm"><i id="resetp" class="fas fa-user-cog"></i></a>
                    </td> 
                </tr>
            <?php } ?>    
        </tbody>
    </table>    
</div>

            <script>
                $(function() {
            $('#table-sorter-accountsA').change(function(){
                $('.tables').hide();
                $('#' + $(this).val()).show();
                var drpInsertMerge = document.getElementById("table-sorter-accountsA");
                drpInsertMerge.selectedIndex = 0;
            });
            });
             </script>   
            
            


    <div id="tblaccounts-Active" class="tables" style="display: none">
    <?php
            $query = "SELECT * FROM tblaccounts WHERE Status = 'ACTIVE' AND NOT User_Type = 'Admin'";    
            $stmt = $conn->prepare($query);
              $stmt->execute();
              $result = $stmt->get_result();
        ?> 
        <table class="table"  >
            <thead>
                <th>EMPLOYEE ID</th>
                <th>FULL NAME</th>
                <th>USER TYPE</th>
                <th>PASSWORD</th>
                <th>
                <form action="database.php" method="POST">
                <select name="table-accounts" id="table-sorter-accountsA" required>
                    <option value="">STATUS</option>
                    <option value="tblaccounts-Active">ACTIVE</option>
                    <option value="tblaccounts-Non-Active">INACTIVE</option>
                  </select></th>
                </form>
                <th>ACTIONS</th>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td data-label="EMPLOYEE ID"><?= $row['Employee_ID']; ?></td>
                    <td data-label="FULLNAME"><?= $row['Fullname']; ?></td>
                    <td data-label="USER-TYPE"><?= $row['User_Type']; ?></td>
                    <td data-label="PASSWORD"><?= $row['Password']; ?></td>
                    <td data-label="STATUS"><small class='activestat'><?= $row['Status']; ?></small></td>
                    <td data-label="ACTIONS">
                    <a href="javascripit:void(0)" class="deactivate-confirm"><i id="edit" class="fas fa-toggle-on"></i></a><span></span>
                    <a href="javascripit:void(0)" class="reset-confirm"><i id="resetp" class="fas fa-user-cog"></i></a>
                    </td> 
                </tr>
            <?php } ?>    
        </tbody>
    </table>   
</div>  

            <script>
                $(function() {
            $('#table-sorter-accountsN').change(function(){
                $('.tables').hide();
                $('#' + $(this).val()).show();
                var drpInsertMerge = document.getElementById("table-sorter-accountsN");
                drpInsertMerge.selectedIndex = 0;
            });
            });
             </script>   
           

<div id="tblaccounts-Non-Active" class="tables" style="display: none">
    <?php
            $query = "SELECT * FROM tblaccounts WHERE Status = 'INACTIVE' AND NOT User_Type = 'Admin'";    
            $stmt = $conn->prepare($query);
              $stmt->execute();
              $result = $stmt->get_result();
        ?> 
        <table class="table"  >
            <thead>
                <th>EMPLOYEE ID</th>
                <th>FULL NAME</th>
                <th>USER TYPE</th>
                <th>PASSWORD</th>
                <th>
                <form action="database.php" method="POST">
                <select name="table-accounts" id="table-sorter-accountsN" required>
                    <option value="">STATUS</option>
                    <option value="tblaccounts-Active">ACTIVE</option>
                    <option value="tblaccounts-Non-Active">INACTIVE</option>
                  </select></th>
                </form>
                <th>ACTIONS</th>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td data-label="EMPLOYEE ID"><?= $row['Employee_ID']; ?></td>
                    <td data-label="FULLNAME"><?= $row['Fullname']; ?></td>
                    <td data-label="USER-TYPE"><?= $row['User_Type']; ?></td>
                    <td data-label="PASSWORD"><?= $row['Password']; ?></td>
                    <td data-label="STATUS"><small class='inactivestat'><?= $row['Status']; ?></small></td>
                    <td data-label="ACTIONS">
                    <a href="javascripit:void(0)" class="activate-confirm"><i id="edit-off" class="fas fa-toggle-off"></i></a><span></span>
                    <a href="javascripit:void(0)" class="reset-confirm"><i id="resetp" class="fas fa-user-cog"></i></a>
                    </td> 
                </tr>
            <?php } ?>    
        </tbody>
    </table>   
</div>  
 

    <script>

    $(document).ready(function () {

        $('.delete-confirm').on('click', function(e){

            e.preventDefault();

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            var deleteid = data[0];
            

            swal({
             title: "Are you sure to delete this account?",
             icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            
            $.ajax({
                type: "POST",
                url: "../includes/dbprocess.php", 
                data: {
                    "delete_btn_confirm":1,
                    "delete_id_confirm": deleteid,
                },
             success: function(result){
                swal({
                    title: "Successfully Account Deleted!",
                    icon: "success",
                }).then((result) => {
                    location.reload();
                });
            }
    });
       
    } 

    });
        });

    });

    </script>


<script>

$(document).ready(function () {

    $('.reset-confirm').on('click', function(e){

        e.preventDefault();

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        var resetid = data[0];
        

        swal({
         title: "Are you sure to reset the password of this account?",
         icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        
        $.ajax({
            type: "POST",
            url: "../includes/dbprocess.php", 
            data: {
                "reset_btn_confirm":1,
                "reset_id_confirm": resetid,
            },
         success: function(result){
            swal({
                title: "Successfully Password Reset!",
                icon: "success",
            }).then((result) => {
                location.reload();
            });
        }
});
   
} 

});
    });

});

</script>


<script>

$(document).ready(function () {

    $('.activate-confirm').on('click', function(e){

        e.preventDefault();

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        var id = data[0];
        

        swal({
         title: "Are you sure to activate this account?",
         icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        
        $.ajax({
            type: "POST",
            url: "../includes/dbprocess.php", 
            data: {
                "activate_btn_confirm":1,
                "activate_id_confirm": id,
            },
         success: function(result){
            swal({
                title: "Successfully Activated the Account!",
                icon: "success",
            }).then((result) => {
                location.reload();
            });
        }
});
   
} 

});
    });

});

</script>



<script>

$(document).ready(function () {

    $('.deactivate-confirm').on('click', function(e){

        e.preventDefault();

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        var id = data[0];
        

        swal({
         title: "Are you sure to deactivate this account?",
         icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        
        $.ajax({
            type: "POST",
            url: "../includes/dbprocess.php", 
            data: {
                "deactivate_btn_confirm":1,
                "deactivate_id_confirm": id,
            },
         success: function(result){
            swal({
                title: "Successfully Deactivated the Account!",
                icon: "success",
            }).then((result) => {
                location.reload();
            });
        }
});
   
} 

});
    });

});

</script>





    


        </main>
    <!---- add user---> 
            <div class="modal-bg">
                <div class="modal">              
                    <div class="heading">
                        <h3>User Account</h3>
                        <button  class="close">&times;</button>
                    </div>
                    <div class="small">
                     <h5>Complete the form to add new user</h5> 
                    </div>

                        <form action="../includes/dbprocess.php" method="POST">
                    <div class="wrapper">
                    <div class="input-data">
                        <input type="text" name="Fname" required>
                        <div class="underline">
                </div>
                <label>First name</label>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="input-data">
                        <input type="text" name="Lname" required>
                        <div class="underline">
                </div>
                <label>Last name</label>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="input-data">
                        <input type="text" name="EmpID" required>
                        <div class="underline">
                </div>
                <label>Employee ID</label>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="input-data">
                        <input type="text" name="PassW" class="TGP" required>
                        <div class="underline">
                        <button type="button" class="GP">Generate password</button>
                </div>
                <label>Generated password</label>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="input-data">
                        <select name="UserType" required>
                            <option value="" disabled selected>USER TYPE</option>
                            <option value="Dean">DEAN</option>
                            <option value="Professor">PROFESSOR</option> </select>
                </div>
               
                    </div>
                    <div class="submite">
                        <div class="data">      
                         <button type="submit" name="add_user" ><i class="fas fa-user-plus"></i> ADD USER</button>
                    </div>
                   
                        </div>
                </div>
                
                        </form>

                </div>
            </div>
           

          <div class="bg-modal">
                <div class="modals">
                    <div class="head">
                     
                        <h4>Administrator</h4>
                    </div>
                    <div class="options">
                        <ul>
                            <li><button> <span class="fas fa-cog"></span>Settings</button></li>
                            <li><button> <span class="fas fa-question-circle"></span>Help</button></li>
                            <li><button> <span class="fas fa-sign-out-alt"></span>Sign out</button></li>
                            <li><button class="close-button"> <span class="fas fa-times-circle"></span>Close</button></li>
                        </ul>
                    </div>
                   

                </div>
            </div> 

         
            <script>
               $(function() {
                   $(".GP").on('click', function(){
                    
                    
                    var length = 6,
                    character = "abcdefghijklmnofqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*",
                    
                    retVal = ""

                    for (var i = 0, n = character.length; i < length; ++i) {
                        retVal += character.charAt(Math.floor(Math.random() * n));
                        
                    }
                        $(".TGP").val(retVal);
                   });
               }); 
              
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

<!--

-->

</body>


</html>