<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  * FROM baw_customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $outer_text=$row['c_id']." ".$row['c_name']." ".$row['c_company'];
         $c_id=$row['c_id'];
       echo "<option value='$c_id'>$outer_text</option>";
    }
}
// closing connection
	$conn->close();
?>