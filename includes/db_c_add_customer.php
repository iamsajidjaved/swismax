<?php
// including database connection file
	include '../config/db_connection.php';
//Inserting data
	$name=$_POST['name'];
	$company=$_POST['company'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$message="";
	$sql = "INSERT INTO baw_customers (c_name, c_company, c_mobile, c_email)
	VALUES ('$name', '$company', '$contact', '$email')";

	if ($conn->query($sql) === TRUE) {
	    $message="Customer entered into the database.";

	} else {
	    $message= "Opps: $company is already registered with us. ";
	}
	header("location:../c_add_customer.php?message=$message");
// closing connection
	$conn->close();
?>