<?php
// including database connection file
	include '../config/db_connection.php';
//Updating balance
	$c_id=$_POST['c_id'];
	$new_balance=$_POST['new_balance'];
	$message="";
	$sql = "UPDATE baw_customers SET c_balance='$new_balance' where c_id='$c_id'";

	if ($conn->query($sql) === TRUE) {
	    $message="Balance updated in the database.";

	} else {
	    $message= "Error: " . $conn->error;
	}
	header("location:../c_all_customers.php?message=$message");
// closing connection
	$conn->close();
?>