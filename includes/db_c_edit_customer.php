<?php
// including database connection file
	include '../config/db_connection.php';
//Inserting data
	$c_id=$_POST['c_id'];
	$name=$_POST['name'];
	$company=$_POST['company'];
	$contact=$_POST['contact'];
	$c_email=$_POST['c_email'];
	$message="";
	$sql = "UPDATE baw_customers SET c_name='$name', c_company='$company', c_mobile='$contact', c_email='$c_email' where c_id='$c_id'";

	if ($conn->query($sql) === TRUE) {
	    $message="Customer record updated in the database.";

	} else {
	    $message= "Error: " . $conn->error;
	}
	header("location:../c_all_customers.php?message=$message");
// closing connection
	$conn->close();
?>