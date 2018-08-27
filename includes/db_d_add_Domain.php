<?php
// including database connection file
	include '../config/db_connection.php';
//Inserting data
	$tld=$_POST['tld'];
	$price=$_POST['price'];
	$message="";
	$sql = "INSERT INTO baw_domains (d_tld, d_price)
	VALUES ('$tld', '$price')";

	if ($conn->query($sql) === TRUE) {
	    $message="TLD entered into the database.";

	} else {
	    $message= "Error: " . $conn->error;
	}
	header("location:../d_add_Domain.php?message=$message");
// closing connection
	$conn->close();
?>