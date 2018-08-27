<?php
// including database connection file
	include '../config/db_connection.php';
// getting h_id from get variable
	$h_id=$_GET['h_id'];
//declaring message variable
	$message='';
//deleting data
	$sql = "DELETE FROM baw_hostings WHERE h_id='$h_id'";
	if ($conn->query($sql) === TRUE) {
	    $message= "Hosting package deleted successfully";
	} else {
	    $message= "Error deleting record: " . $conn->error;
	}
	header("location:../h_all_packages.php?message=$message");
// closing connection
	$conn->close();
?>