<?php

if( isset($_POST['t_id'] ) )
{

// including database connection file
	include '../config/db_connection.php';
//Catching value
	$d_id=$_POST['t_id'];

$sql = " SELECT d_price FROM baw_domains WHERE d_id='$d_id'";

$result = $conn->query($sql);

// output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["d_price"];
        
    }

}
?>