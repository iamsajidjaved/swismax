<?php
// including database connection file
	include '../config/db_connection.php';
// getting d_id from get variable
	$c_id=$_GET['c_id'];
//declaring message variable
	$message='';
//deleting data
	$sql = "DELETE FROM baw_customers WHERE c_id='$c_id'";
	if ($conn->query($sql) === TRUE) {
	    $message= "Customer is deleted successfully";
	} else {
	    $message= "Error deleting record: " . $conn->error;
	}
	header("location:../c_all_customers.php?message=$message");
// closing connection
	$conn->close();
?>