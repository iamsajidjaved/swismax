<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  * FROM baw_hostings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $outer_text=$row['h_id']." ".$row['h_hosting_package'];
         $h_id=$row['h_id'];
       echo "<option value='$h_id'>$outer_text</option>";
    }
}
// closing connection
	$conn->close();
?>