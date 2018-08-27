<?php
// including database connection file
	include '../config/db_connection.php';
// getting h_id from get variable
	$o_id=$_GET['o_id'];
//declaring message variable
	$message='';
//deleting data
	$sql = "DELETE FROM baw_orders WHERE o_id='$o_id'";
	if ($conn->query($sql) === TRUE) {
	    $message= "Order deleted successfully";
	} else {
	    $message= "Error deleting order: " . $conn->error;
	}
	header("location:../o_all_orders.php?message=$message");
// closing connection
	$conn->close();
?>