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
                           <h3 class="text-center">UPDATE HOSTING PACKAGE</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="includes/db_h_edit_domain.php">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="h_id" required  value="<?php if(isset($_GET['h_id'])){ echo $_GET['h_id']; }?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Package</label>
                                            <input class="form-control" type="text" name="package" required value="<?php if(isset($_GET['h_hosting_package'])){ echo $_GET['h_hosting_package']; }?>">
                                            <p class="help-block">Like startar,plus +,professional or corporate etc. </p>
                                        </div>
                                 <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" type="number" name="price" required value="<?php if(isset($_GET['h_price'])){ echo $_GET['h_price']; }?>">
                                     <p class="help-block">Must be numberic. No letter or special character.</p>
                                        <input type="submit" class="btn btn-info" value="UPDATE NOW">
                                    </form>
                            </div>
                            <div class="panel-footer">
                                <!-- Something will here -->
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
