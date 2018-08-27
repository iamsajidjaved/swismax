<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  * FROM  baw_orders";
$result = $conn->query($sql);
// declaring $serial_no variable
$serial_no=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr>".
             "<td>".$serial_no."</td>".
             "<td>".$row['o_customer_id']."</td>".
             "<td>".$row['o_tld_id']."</td>".
             "<td>".$row['o_tld_price']."</td>".
             "<td>".$row['o_domain']."</td>".
             "<td>".$row['o_hosting_package_id']."</td>".
             "<td>".$row['o_hosting_price']."</td>".
             "<td>".$row['o_paid']."</td>".
             "<td>".$row['o_total']."</td>".
             "<td>".
             " <a href='includes/db_o_delete_order.php?o_id=".$row["o_id"]."' id='".$row['o_id']."' onclick='del_customer(this.id)'><i class='fa fa-trash'></i></a></td>". 
         "</tr>";
         $serial_no++;
    }
}
// closing connection
	$conn->close();
?>