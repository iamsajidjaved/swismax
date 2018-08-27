<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  * FROM baw_orders";
$result = $conn->query($sql);
echo $total_orders=$result->num_rows;
// closing connection
	$conn->close();
?>