<?php
// including database connection file
	include '../config/db_connection.php';
//updating data
	$h_id=$_POST['h_id'];
	$package=$_POST['package'];
	$price=$_POST['price'];
	$message="";
	$sql = "UPDATE baw_hostings  SET h_hosting_package='$package', h_price='$price' where h_id='$h_id'";

	if ($conn->query($sql) === TRUE) {
	    $message="Hosting package is updated in the database.";

	} else {
	    $message= "Error: " . $conn->error;
	}
	header("location:../h_all_packages.php?message=$message");
// closing connection
	$conn->close();
?>