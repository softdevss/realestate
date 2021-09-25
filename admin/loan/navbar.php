

<link rel="stylesheet" href="./menu.css">

<div class="nav" id="navbar">
                    <nav class="nav__container">
                        <div>
                            <a href="./admin_home.php" class="nav__link nav__logo">
                                <i class='bx bxs-disc nav__icon' ></i>
                                <span class="nav__logo-name">Administrator</span>
                            </a>
            
                            <div class="nav__list">
                                <div class="nav__items">
                                    <h3 class="nav__subtitle">SALES</h3>
            
                                    <a href="./admin_home.php" class="nav__link active">
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
        
                                    <div class="nav__dropdown">
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-file nav__icon' ></i>
                                            <span class="nav__name">Voucher</span>
                                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                        </a>
        
                                        <div class="nav__dropdown-collapse">
                                            <div class="nav__dropdown-content">
                                                <a href="view_voucher.php" class="nav__dropdown-item">View Voucher</a>
                                                <a href="add_voucher.php" class="nav__dropdown-item">Add Voucher</a>
                                            
                                            </div>
                                        </div>
        
                                    </div>
        
                                    <div class="nav__dropdown">
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-user nav__icon' ></i>
                                            <span class="nav__name">CLIENT APPLICATION</span>
                                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                        </a>
        
                                        <div class="nav__dropdown-collapse">
                                            <div class="nav__dropdown-content">
                                                <a href="index.php?page=loans" class="nav__dropdown-item">LOAN LIST</a>
                                                <a href="index.php?page=payments" class="nav__dropdown-item">PAYMENT</a>
                                                <a href="index.php?page=borrowers" class="nav__dropdown-item">BARROWER</a>
                                                <a href="index.php?page=plan" class="nav__dropdown-item">LOAN PLANS</a>
                                                <a href="index.php?page=loan_type" class="nav__dropdown-item">LOAN TYPE</a>
                                            </div>
                                        </div>
                                    </div>
                                
        
                                <a href="./contact.php" class="nav__link">
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



 
                   

<!-- <nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=loans" class="nav-item nav-loans"><span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span> Loans</a>	
				<a href="index.php?page=payments" class="nav-item nav-payments"><span class='icon-field'><i class="fa fa-money-bill"></i></span> Payments</a>
				<a href="index.php?page=borrowers" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-user-friends"></i></span> Borrowers</a>
				<a href="index.php?page=plan" class="nav-item nav-plan"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Loan Plans</a>	
				<a href="index.php?page=loan_type" class="nav-item nav-loan_type"><span class='icon-field'><i class="fa fa-th-list"></i></span> Loan Types</a>		
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				
			<?php endif; ?>
		</div>

</nav> -->
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
