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
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                        <div class="panel-heading">
                           <h3 class="text-center">ADD A NEW CUSTOMER</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="includes/db_c_add_customer.php">
                                        <div class="form-group">
                                            <label>Customer's Name</label>
                                            <input class="form-control" type="text" name="name" required>
                                            <p class="help-block">Like John Doe or Ahmad Raza etc. </p>
                                        </div>
                                         <div class="form-group">
                                                    <label>Customer's Company</label>
                                                    <input class="form-control" type="text" name="company" required>
                                             <p class="help-block">Like Petrolium Training Academy Islamabad etc.</p>
                                        </div>
                                        <div class="form-group">
                                                    <label>Customer's Contact</label>
                                                    <input class="form-control" type="number" name="contact" required>
                                             <p class="help-block">Must be numeric. Use double zeros(00) instead of plus(+)</p>
                                        </div>
                                        <div class="form-group">
                                                    <label>Customer's Email</label>
                                                    <input class="form-control" type="email" name="email" required>
                                        </div>
                                        <div class="btn-group">
                                            <input class="btn btn-primary" type="submit" name="submit" required value="ADD NOW">
                                            <input class="btn btn-danger" type="reset" name="reset" required value="CLEAR">
                                        </div>
                            </form>
                            </div>
                            <div class="panel-footer">
                                <p class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message'];}?></p>
                            </div>
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
