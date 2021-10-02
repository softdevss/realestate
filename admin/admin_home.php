<?php include "includes/header.php" ?>
<?php include '../includes/dbconnect.php'; ?>

        <!--========== NAV ==========-->
            <?php include "includes/navbar.php" ?>

        <main>

        <div class="main-content">
                <div class="info-card">
                    <div class="card">
                   <div class="card-icon">
                       <span><i class="fas fa-layer-group"></i></span>
                   </div> 
                   <div class="card-details">
                       <h4>PAYMENTS TODAY</h4>
                       <h2><?php  $payments = $conn->query("SELECT sum(amount) as total FROM payments where date(date_created) = '".date("Y-m-d")."'");
                        echo $payments->num_rows > 0 ? number_format($payments->fetch_array()['total'],2) : "0.00";
                        ?> </h2>
                   </div>
                   <a href="./loan/index.php?page=payments">View Payments</a>
                </div>
                <div class="card">
                   <div class="card-icon">
                       <span><i class="fas fa-users"></i></span>
                   </div> 
                   <div class="card-details">
                       <h4>CLIENTS TOTAL REGISTER</h4>
                       <h2> <?php $borrowers = $conn->query("SELECT * FROM borrowers");
                        echo $borrowers->num_rows > 0 ? $borrowers->num_rows : "0";
                        ?></h2>
                   </div>
                   <a href="./loan/index.php?page=borrowers">View Clients</a>
                </div>
                <div class="card">
                   <div class="card-icon">
                       <span><i class="fas fa-user-secret"></i></span>
                   </div> 
                   <div class="card-details">
                       <h4>ACTIVE CLIENTS</h4>
                       <h2><?php $loans = $conn->query("SELECT * FROM loan_list where status = 2");
                        echo $loans->num_rows > 0 ? $loans->num_rows : "0";
                        ?></h2>
                   </div>
                   <a href="./loan/index.php?page=loans">View Active Clients</a>
                </div>
                
            </div>

            </div>

            </div> 
        </main>

		</body>
       
        <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
        <script src="./menu.js"></script>
     </html>
