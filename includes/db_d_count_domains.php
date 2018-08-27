<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  d_id,d_tld, d_price FROM baw_domains";
$result = $conn->query($sql);
echo $total_domains=$result->num_rows;
// closing connection
	$conn->close();
?>