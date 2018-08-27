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
                           <h3 class="text-center">PLACE A NEW ORDER</h3>
                           <p class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message'];}?></p>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="includes/db_o_add_order.php">
                                        <div class="form-group">
                                              <label for="sel1">Select Customer ID</label>
                                              <select class="form-control" id="c_id" name="c_id">
                                                <option value=""></option>
                                                <?php include 'includes/db_o_all_customers_ids.php'; ?>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                              <label for="sel1">Select TLD ID</label>
                                              <select class="form-control" id="t_id" name="t_id" onchange="get_tld_price();" onblur="find_total()">
                                                <option value=""></option>
                                                <?php include 'includes/db_o_all_tlds_ids.php'; ?>
                                              </select>
                                        </div>
                                         <div class="form-group">
                                                    <label>TLD Price</label>
                                                    <input class="form-control" type="text" name="tld_price" required readonly id="tld_price" value="0">
                                        </div>
                                        <div class="form-group">
                                                    <label>Website Domain Address</label>
                                                    <input class="form-control" type="url" name="domain" required id="domain">
                                        </div>
                                        <div class="form-group">
                                              <label for="sel1">Select Hosting Package ID</label>
                                              <select class="form-control" id="h_id" name="h_id" onchange="get_package_price();" onblur="find_total()">
                                                <option value=""></option>
                                                <?php include 'includes/db_o_all_packages_ids.php'; ?>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                                    <label>Hosting Package Price</label>
                                                    <input class="form-control" type="number" name="hosting_price" required readonly id="hosting_price" value="0">
                                        </div>
                                        <div class="form-group">
                                                    <label>Total Cost</label>
                                                    <input class="form-control" type="number" name="total_cost" required id="total_cost" readonly>
                                             <p class="help-block">Sum of TLD price and hosting package price.</p>
                                        </div>
                                        <div class="form-group">
                                                    <label>Amount Paid</label>
                                                    <input class="form-control" type="number" name="amount_paid" required id="amount_paid"  onkeyup="find_balance()">
                                             <p class="help-block">Enter amount paid by customer</p>
                                        </div>
                                        <div class="form-group">
                                                    <label>Balance(Arrears)</label>
                                                    <input class="form-control" type="number" name="balance" required id="balance" readonly>
                                             <p class="help-block">Total cost minus amount paid.</p>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-primary" type="submit" name="submit" required value="ADD NOW">
                                            <input class="btn btn-danger" type="reset" name="reset" required value="CLEAR">
                                        </div>
                            </form>
                            </div>
                            <div class="panel-footer">
                                <!-- something will go here -->
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

    <!-- Getting tld price -->
    <script>
        function get_tld_price() {
            var t_id = document.getElementById("t_id").value;
            if(t_id){
                  $.ajax({
                  type: 'post',
                  url: 'includes/db_o_tld_price.php',
                  data: {
                   t_id:t_id,
                  },
                  success: function (response) {
                   // We get the element having id of display_info and put the response inside it
                   $("#tld_price").val(response);
                  }
                  });
            }

        }
    </script>
    <!-- Getting hosting package price -->
     <script>
        function get_package_price() {
            var h_id = document.getElementById("h_id").value;
            if(h_id){
                  $.ajax({
                  type: 'post',
                  url: 'includes/db_o_package_price.php',
                  data: {
                   h_id:h_id,
                  },
                  success: function (response) {
                   // We get the element having id of display_info and put the response inside it
                   $("#hosting_price").val(response);
                  }
                  });
            }

        }
    </script>
    <!-- Adding tld and hosting package prices -->
    <script>
        function find_total(){
            var tld_price = document.getElementById("tld_price").value;
            var hosting_price = document.getElementById("hosting_price").value;
            var total_cost=parseInt(tld_price)+parseInt(hosting_price);
            $("#total_cost").val(total_cost);
        }
    </script>
    <!-- Finding Balance -->
    <script>
        function find_balance(){
            var total_cost = document.getElementById("total_cost").value;
            var amount_paid = document.getElementById("amount_paid").value;
            var balance=parseInt(total_cost)-parseInt(amount_paid);
            $("#balance").val(balance);
        }
    </script>


</body>
</html>
