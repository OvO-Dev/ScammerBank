<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=CFG::bank_name ?></title>

  <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <?php require __DIR__ . "/../../parts/sidebar.php" ?>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <?php require __DIR__ . "/../../parts/topbar.php" ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">	
                
                    <div class="row">
                        
                        <div class="col-md-8">
                            
                            <h3>Accounts</h3>
                            <table id='accounts' class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Account Number</th>
                                        <th>Current Balance</th>
                                        <th>Available Balance</th>
                                    </tr>
                
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Personal Checking</td>
                                        <td>****1664</td>
                                        <td>$9,337.00</td>
                                        <td>$1,234.00</td>
                                    </tr>
                
                                    <tr>
                                        <td>Platinum AARP Credit Card</td>
                                        <td>****<?=CFG::user_cc ?></td>
                                        <td>$420.00</td>
                                        <td>$24,580.00</td>
                                    </tr>
                
                                    <tr>
                                        <td>Online Savings</td>
                                        <td>****1817</td>
                                        <td>$19,293.44</td>
                                        <td>$15,011.34</td>
                                    </tr>
                
                                    <tr>
                                        <td>Roth IRA</td>
                                        <td>****1930</td>
                                        <td>$86,753.09</td>
                                        <td>$87,482.10</td>
                                    </tr>
                            
                                    <tr>
                                        <td>Fixed Rate War Bond</td>
                                        <td>****6969</td>
                                        <td>$11,420.00</td>
                                        <td>$12,492.10</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            <div class="row">
                                
                                <div class="col">
                                

                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="class-title">What's your Credit Score?</h4>
                                            </p>Find out what your credit score is right now, seriousy it's really easy.</p>
                                            <a href="#">Learn More</a>
                                        </div>
                                    </div>
                                
                                </div>
                                
                                <div class="col">
                                

                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="class-title">Join AARP Rewards</h4>
                                            </p>You could be saving serious coin on everyday purchases.
                                            </p>
                                            <a href="#">Learn More</a>
                                        </div>
                                    </div>
                                
                                </div>
                                
                                <div class="col">
                                

                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="class-title">Record Low Interest Rates</h4>
                                            </p>You're already approved. It takes just a moment to open an account</p>
                                            <a href="#">Learn More</a>
                                        </div>
                                    </div>
                                
                                </div>
                                
                                
                                <div class="spacer"></div>
                                
                                

                                <button class="btn btn-warning">Contact Support</button>
                    
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <h3>Pending Transactions</h3>
                                <table id='accounts' class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        
                                    </tr>
                
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo date('m/d'); ?></td>
                                        <td>APL*ITUNES.COM/BILL</td>
                                        <td><span class="badge badge-danger">-50.00</td>
                                    </tr>
                                    
                                    <tr>	
                                        <td><?php echo date('m/d'); ?></td>
                                        <td>Netflix</td>
                                        <td><span class="badge badge-danger">-14.99</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><?php echo date('m/d'); ?></td>
                                        <td>CandyCrush Checkout</td>
                                        <td><span class="badge badge-danger">-13.37</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><?php echo date('m/d'); ?></td>
                                        <td>Apple iTunes</td>
                                        <td><span class="badge badge-danger">-50.00</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><?php echo date('m/d'); ?></td>
                                        <td>Checque #103 Deposit</td>
                                        <td><span class="badge badge-success">$50.00</td>
                                    </tr>
                
                                    <tr>
                                        <td><?php echo date('m/d'); ?></td>
                                        <td>Social Security</td>
                                        <td><span class="badge badge-success">$1,393.19</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><?php echo date('m/d', strtotime('-1 day')); ?></td>
                                        <td>AMZN MARKETPLACE</td>
                                        <td><span class="badge badge-danger">-$100.00</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><?php echo date('m/d', strtotime('-1 days')); ?></td>
                                        <td>WINRAR/BILL</td>
                                        <td><span class="badge badge-danger">-$30.00</td>
                                    </tr>
                                    

                                    <tr>
                                        <td><?php echo date('m/d', strtotime('-1 days')); ?></td>
                                        <td>QVC*SHOPPING BILL</td>
                                        <td><span class="badge badge-danger">-$140.50.00</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td><?php echo date('m/d', strtotime('-2 days')); ?></td>
                                        <td>Fashion Barn</td>
                                        <td><span class="badge badge-danger">-$333.50</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td><?php echo date('m/d',  strtotime('-4 days')); ?></td>
                                        <td>McDonald's</td>
                                        <td><span class="badge badge-danger">-$18.20</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>  

                    </div>
                </div>

            </div>

            <?php require __DIR__ . "/../../parts/footer.php" ?>
        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php require __DIR__ . "/../../parts/logout.php" ?>

    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="/assets/js/sb-admin-2.min.js"></script>

    <script src="/assets/vendor/chart.js/Chart.min.js"></script>

    <script src="/assets/js/demo/chart-area-demo.js"></script>
    <script src="/assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
