<?php
// including database connection file
	include '../config/db_connection.php';
//Inserting data
	$package=$_POST['package'];
	$price=$_POST['price'];
	$message="";
	$sql = "INSERT INTO baw_hostings (h_hosting_package, h_price)
	VALUES ('$package', '$price')";

	if ($conn->query($sql) === TRUE) {
	    $message="Hosting package entered into the database.";

	} else {
	    $message= "Error: " . $conn->error;
	}
	header("location:../h_add_package.php?message=$message");
// closing connection
	$conn->close();
?>