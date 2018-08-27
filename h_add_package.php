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
                           <h3 class="text-center">ADD A NEW PACKAGE</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="includes/db_h_add_package.php">
                                        <div class="form-group">
                                            <label>Package</label>
                                            <input class="form-control" type="text" name="package" required>
                                            <p class="help-block">Like startar,plus +,professional or corporate etc. </p>
                                        </div>
                                 <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" type="number" name="price" required>
                                     <p class="help-block">Must be numberic. No letter or special character.</p>
                                        <input type="submit" class="btn btn-info" value="Add Now">
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
