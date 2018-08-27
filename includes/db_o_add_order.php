<?php
// including database connection file
	include '../config/db_connection.php';
//Inserting data
	$c_id=$_POST['c_id'];
	$t_id=$_POST['t_id'];
	$tld_price=$_POST['tld_price'];
	$h_id=$_POST['h_id'];
	$hosting_price=$_POST['hosting_price'];
	$total_cost=$_POST['total_cost'];
	$amount_paid=$_POST['amount_paid'];
	$balance=$_POST['balance'];
	$domain=$_POST['domain'];
	$message="";
	$sql = "INSERT INTO baw_orders (o_customer_id, o_tld_id, o_tld_price, o_domain, o_hosting_package_id, o_hosting_price, o_total, o_paid)
	VALUES ('$c_id', '$t_id', '$tld_price','$domain','$h_id', '$hosting_price', '$total_cost','$amount_paid')";

	if ($conn->query($sql) === TRUE) {
		// Getting old balance of the o_customer_id
			$sql = "SELECT  c_balance FROM baw_customers where c_id='$c_id'";
			$result = $conn->query($sql);
			// declaring $serial_no variable
			$serial_no=1;
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			       $old_balance=$row['c_balance'];
			       $new_balance=$old_balance+$balance;
			    }
			}
			else {
			    $message= "Error: getting old balance: " . $conn->error;
			}
		//End of getting old balance of the o_customer_id
		//updating balance of the customer
			$sql = "UPDATE baw_customers SET c_balance='$new_balance' WHERE c_id='$c_id'";
			if ($conn->query($sql) === TRUE) {
			} else {
			    echo "Error: updating balance: " . $conn->error;
			}

		//End of updating old balance of the customer
	    $message="Record is entered into the database.";

	} else {
	    $message= "Error: " . $conn->error;
	}
	header("location:../o_add_order.php?message=$message");
// closing connection
	$conn->close();
?>