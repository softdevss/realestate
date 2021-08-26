


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
            <th>Id</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Messages</th>
        </tr>
        
        <?php
           $conn = mysqli_connect("localhost", "root", "", "php_multiplelogin");
           $sql = "SELECT * FROM contactus";
           $result = $conn->query($sql);

           if($result->num_rows > 0) {
               while($row = $result-> fetch_assoc()){
                   echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fullname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["message"] . "</td></tr>";

               }
           }
           else {
               echo "No Result";
           }
           $conn->close();

        ?>

    </table>
</div>
</body>
</html>