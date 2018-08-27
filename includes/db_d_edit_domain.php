<?php
// including database connection file
	include '../config/db_connection.php';
//Inserting data
	$d_id=$_POST['d_id'];
	$tld=$_POST['tld'];
	$price=$_POST['price'];
	$message="";
	$sql = "UPDATE baw_domains SET d_tld='$tld', d_price='$price' where d_id='$d_id'";
	if ($conn->query($sql) === TRUE) {
	    $message="TLD is updated in the database.";

	} else {
	    $message= "Error: " . $conn->error;
	}
	header("location:../d_all_domains.php?message=$message");
// closing connection
	$conn->close();
?>