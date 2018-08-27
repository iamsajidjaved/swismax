<?php

if( isset($_POST['c_id'] ) )
{
// including database connection file
	include '../config/db_connection.php';
//Catching value
	$c_id=$_POST['c_id'];

$sql = " SELECT c_balance FROM baw_customers WHERE c_id='$c_id'";

$result = $conn->query($sql);

// output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["c_balance"];   
    }
}
?>