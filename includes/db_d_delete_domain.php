<?php
// including database connection file
	include '../config/db_connection.php';
// getting d_id from get variable
	$d_id=$_GET['d_id'];
//declaring message variable
	$message='';
//deleting data
	$sql = "DELETE FROM baw_domains WHERE d_id='$d_id'";
	if ($conn->query($sql) === TRUE) {
	    $message= "Top level domain deleted successfully";
	} else {
	    $message= "Error deleting record: " . $conn->error;
	}
	header("location:../d_all_domains.php?message=$message");
// closing connection
	$conn->close();
?>