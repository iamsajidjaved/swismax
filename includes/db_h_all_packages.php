<?php
// including database connection file
	include 'config/db_connection.php';
//selecting data
$sql = "SELECT  h_id,h_hosting_package, h_price FROM baw_hostings";
$result = $conn->query($sql);
// declaring $serial_no variable
$serial_no=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr>".
             "<td>".$serial_no."</td>".
             "<td>".$row['h_hosting_package']."</td>".
             "<td>".$row['h_price']."</td>".
             "<td><a href='h_edit_package.php?h_id=".$row["h_id"]."&h_hosting_package=".$row["h_hosting_package"]."&h_price=".$row["h_price"]."'><i class='fa fa-pencil-square-o'></i></a></td>".
             "<td><a href='includes/db_h_delete_package.php?h_id=".$row["h_id"]."' id='".$row['h_id']."' onclick='del_customer(this.id)'><i class='fa fa-trash'></i></a></td>". 
         "</tr>";
         $serial_no++;
    }
}
// closing connection
	$conn->close();
?>