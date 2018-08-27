<!-- including header -->
<?php include 'templates/header.php';?>
<body>
    <div id="wrapper">
        <!-- including navbars -->
        <?php include 'templates/navbars.php';?>
        <!-- main wrapper starting from here -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line text-center">DASHBOARD</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-box mb-red">
                            <a href="d_all_domains.php">
                                <i class="fa fa-link fa-5x"></i>
                                <h5> <?php include 'includes/db_d_count_domains.php'; ?> TLDs</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-dull">
                            <a href="h_all_packages.php">
                                <i class="fa fa-cloud fa-5x"></i>
                                <h5><?php include 'includes/db_h_count_packages.php'; ?> Hosting Packages</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-red">
                            <a href="c_all_customers.php">
                                <i class="fa fa-user fa-5x"></i>
                                <h5><?php include 'includes/db_c_count_customers.php'; ?> Customers</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-pink">
                            <a href="o_all_orders.php">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                                <h5><?php include 'includes/db_o_count_orders.php'; ?> Orders</h5>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- including footer -->
    <?php include 'templates/footer.php';?>
</body>
</html>
