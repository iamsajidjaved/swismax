<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  * FROM baw_customers";
$result = $conn->query($sql);
echo $total_customers=$result->num_rows;
// closing connection
	$conn->close();
?>