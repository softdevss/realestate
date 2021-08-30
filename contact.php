


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>

</head>
<body>
    <table class="table table-bordered">
        <tr>
           
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Messages</th>
            <th>Delete</th>
        </tr>
        
        <?php
           include("connection.php");
           error_reporting(0);
           $query = "SELECT * FROM contactus";
           $data=mysqli_query($connection,$query);
           $total=mysqli_num_rows($data);
           

         
           //echo $total;

           if($total!=0)
           {
              
              while($result=mysqli_fetch_assoc($data))
              {
                  echo "
                  <tr>
                 
                  <td>".$result['fullname']."</td>
                  <td>".$result['email']."</td>
                  <td>".$result['phone']."</td>
                  <td>".$result['message']."</td>
                  <td><a href='delete.php?rn=$result[id]' onclick='return
                  checkdelete()'>Delete</td>
                  </tr>
                  ";
              }
           }
           else {
               echo "No records";
           }

        ?>

    </table>
</div>
<script>
    function checkdelete()
    {
        return Confirm ('Are you sure you want to Delete this Message ?');

    }
</script>
</body>
</html>