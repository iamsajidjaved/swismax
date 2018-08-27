<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  d_id,d_tld, d_price FROM baw_domains";
$result = $conn->query($sql);
// declaring $serial_no variable
$serial_no=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr>".
             "<td>".$serial_no."</td>".
             "<td>".$row['d_tld']."</td>".
             "<td>".$row['d_price']."</td>".
             "<td><a href='d_edit_domain.php?d_id=".$row["d_id"]."&d_tld=".$row["d_tld"]."&d_price=".$row["d_price"]."'><i class='fa fa-pencil-square-o'></i></a></td>".
             "<td><a href='includes/db_d_delete_domain.php?d_id=".$row["d_id"]."' id='".$row['d_id']."' onclick='del_customer(this.id)'><i class='fa fa-trash'></i></a></td>". 
         "</tr>";
         $serial_no++;
    }
}
// closing connection
	$conn->close();
?>