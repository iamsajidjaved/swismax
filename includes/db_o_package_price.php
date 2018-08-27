<?php

if( isset($_POST['h_id'] ) )
{
// including database connection file
	include '../config/db_connection.php';
//Catching value
	$h_id=$_POST['h_id'];

$sql = " SELECT h_price FROM baw_hostings WHERE h_id='$h_id'";

$result = $conn->query($sql);

// output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["h_price"];   
    }
}
?>