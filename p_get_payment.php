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
                           <h3 class="text-center">GET BALANCE</h3>
                           <p class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message'];}?></p>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="includes/db_p_get_payment.php">
                                        <div class="form-group">
                                              <label for="c_id">Select Customer ID</label>
                                              <select class="form-control" id="c_id" name="c_id" onchange="get_balance()">
                                                <option value=""></option>
                                                <?php include 'includes/db_o_all_customers_ids.php'; ?>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                                    <label>Balance</label>
                                                    <input class="form-control" type="number" name="balance" required id="balance"  readonly>
                                        </div>
                                        <div class="form-group">
                                                    <label>Paid</label>
                                                    <input class="form-control" type="number" name="paid" required id="paid" onkeyup="find_balance()">
                                             <p class="help-block">Amount paid by the customer</p>
                                        </div>
                                        <div class="form-group">
                                                    <label>New Balance</label>
                                                    <input class="form-control" type="number" name="new_balance" required id="new_balance">
                                             <p class="help-block">Amount paid by the customer</p>
                                        </div>
                                        <div class="btn-group">
                                            <input class="btn btn-primary" type="submit" name="submit" required value="GET NOW" onclick="print_receipt()">
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

    <!-- Getting old balance from the database -->
    <script>
        function get_balance() {
            var c_id = document.getElementById("c_id").value;
            if(c_id){
                  $.ajax({
                  type: 'post',
                  url: 'includes/db_p_get_balance.php',
                  data: {
                   c_id:c_id,
                  },
                  success: function (response) {
                   // We get the element having id of display_info and put the response inside it
                   $("#balance").val(response);
                  }
                  });
            }

        }
    </script>
    <script>
      // finding balance(old_bance - paid= new_balance)
      function find_balance(){
        var balance = document.getElementById("balance").value;
        var paid = document.getElementById("paid").value;
        var new_balance=parseInt(balance)-parseInt(paid);
        $("#new_balance").val(new_balance);
      }
    </script>
      <!-- Printing receipt -->
    <script>
      function print_receipt(){
        var result=confirm("Are you want to print receipt?");
        if(result){
         var c_id= $('#c_id').val();
         var balance= $('#balance').val();
         var paid= $('#paid').val();
         var new_balance= $('#new_balance').val();
         window.open("p_print_receipt.php?c_id="+c_id+"&balance="+balance+"&paid="+paid+"&new_balance="+new_balance,'_blank');

        }
      }
    </script>
</body>
</html>
