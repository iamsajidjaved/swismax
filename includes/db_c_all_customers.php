<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  c_id, c_name, c_company, c_mobile, c_balance,c_email FROM baw_customers";
$result = $conn->query($sql);
// declaring $serial_no variable
$serial_no=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr>".
             "<td>".$serial_no."</td>".
             "<td>".$row['c_name']."</td>".
             "<td>".$row['c_mobile']."</td>".
             "<td>".$row['c_company']."</td>".
             "<td>".$row['c_balance']."</td>".
             "<td>".$row['c_email']."</td>".
             "<td><a href='c_edit_customer.php?c_id=".$row["c_id"]."&c_name=".$row["c_name"]."&c_mobile=".$row["c_mobile"]."&c_company=".$row["c_company"]."&c_email=".$row["c_email"]."'><i class='fa fa-pencil-square-o'></i></a></td>".
             "<td><a href='includes/db_c_delete_customer.php?c_id=".$row["c_id"]."' id='".$row['c_id']."' onclick='del_customer(this.id)'><i class='fa fa-trash'></i></a></td>". 
         "</tr>";
         $serial_no++;
    }
}
// closing connection
	$conn->close();
?>