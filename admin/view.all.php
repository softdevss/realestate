<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View LAll</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


    
</body>
</html>

<?php
ob_start();
session_start();
    include "../connection.php";            
                    if(isset($_POST['checkBoxArray'])){
                        
                       foreach($_POST['checkBoxArray'] as $postValueId){
                           
                          $bulk_options = $_POST['bulk_options'];
                           
                           switch($bulk_options){
                           
                            case 'dissable':
               
                                $query = "UPDATE masterlogin SET status = '{$bulk_options}' WHERE id = {$postValueId} ";
                                   $update_to_dissable_status = mysqli_query($connection, $query);
                                   if(!$update_to_dissable_status){
                    
                                       die('QUERY FAILED' . mysqli_error($connection));
                    
                                       
                                   }
                                   
                                break;   


                                case 'enable':
               
                                    $query = "UPDATE masterlogin SET status = '{$bulk_options}' WHERE id = {$postValueId} ";
                                       $update_to_enable_status = mysqli_query($connection, $query);
                                       if(!$update_to_enable_status){
                        
                                           die('QUERY FAILED' . mysqli_error($connection));
                              
                                       }
                                       
                                    break; 
                                   }
                                }
                                 
                             

                            }

                            $query = "SELECT * FROM masterlogin WHERE status = 'enable' ";
                            $select_all_enable_post = mysqli_query($connection, $query);   
                            $post_enable_count = mysqli_num_rows($select_all_enable_post);

                            $query = "SELECT * FROM masterlogin WHERE status = 'dissable' ";
                            $select_all_dissable_post = mysqli_query($connection, $query);   
                            $post_dissable_count = mysqli_num_rows($select_all_dissable_post);


                           $query = "SELECT * FROM masterlogin";
                           $checkstatus = mysqli_query($connection,$query);

                           while($row = mysqli_fetch_assoc($checkstatus)){
                            $status = $row['status'];

                            $activeText = "";
                            if($status == 'enable'){
                                $activeText = "Enable";

                            }elseif($status == 'disable'){

                                $activeText = "Disable";
                            }
                        
                        }


?>

<form action="" method="POST">>

<table class="table table-bordered table-hover">
      
       <div id="bulkOptionsContainer" class="col-xs-4">
          
           <select class="form-control" name="bulk_options" id="">
             <option value="">Select Options</option>
             <option value="enable">Enable</option>
             <option value="dissable">Dissable</option>
           </select>
           <input type="submit" name="submit" class="btn btn-success" value="Apply">
</table>
<body style="background:#ffff;">
        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>dissabble users</th> 
                <th>Id</th>
                <th>username</th>
                <th>email</th>
                <th>password</th>
                <th>role</th>
                <th>status</th>
                <th>delete</th>
                <th>edit</th>
               
            </tr>
        </thead>
                            
            <tbody>
             <?php    
                include "../connection.php";

                $query = "SELECT * FROM masterlogin ORDER by id DESC";
                $view_all_users = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($view_all_users)){
                $id = $row['id'];
                $username = $row['username'];
                $email = $row['email'];
                $password    = $row['password'];
                $role  = $row['role'];
                $status  = $row['status'];

                                
                echo "<tr>";   
                ?>
                <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value="<?php echo $id; ?>"></td>
                <?php
                echo "<td>{$id}</td>";  
                echo "<td>{$username}</td>";   
                echo "<td>{$email}</td>";  
                echo "<td>{$password}</td>";       
                echo "<td>{$role}</td>";
                echo "<td>{$status}</td>";
                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='view.all.php?delete={$id}'>Delete</a></td>";
                echo "<td><a href='view.all.php?source=edit_user&edit_user={$id}'>Edit</a></td>";

                echo "</tr>"; 

                }     
             ?>

                    </tbody>
                    </table>
                    <?php

                    if(isset($_GET['delete'])){

                    $the_comment_id = $_GET['delete'];

                    $query  = "DELETE FROM masterlogin WHERE id = {$the_comment_id} ";
                    $delete_query = mysqli_query($connection,$query);

                    header("Location: view.all.php");



                    }
                    ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
  </body>    
    