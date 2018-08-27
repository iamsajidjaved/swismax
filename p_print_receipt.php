<?php
	//Connecting with the database
	include 'config/db_connection.php';
	//Cathing data from Get variable
	$c_id=$_GET['c_id'];
	$balance=$_GET['balance'];
	$paid=$_GET['paid'];
	$new_balance=$_GET['new_balance'];
	$today_date=date('d-m-Y');
	//Getting Name of the customer from database by C_ID
	$sql = "SELECT  c_name, c_company FROM baw_customers where c_id='$c_id'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	       $c_name=$row['c_name'];
	       $c_company=$row['c_company'];
	    }
	}
	require('fpdf/fpdf.php');
	$pdf = new FPDF('P','mm','A5');
	$pdf->AddPage();
	// Designing header
	$pdf->SetFont('Arial','B',16);
    $pdf->Image('photos/receipt.jpg',0,0,150,250);
	$pdf->Cell(130,40,'',0,1,'C');
	$pdf->Cell(130,10,'',0,1,'C');
	$pdf->SetFont('Times','B',14);
	// End of designing header
	$pdf->Cell(130,8,'',0,1,'L');
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(55,10,"",0,0,'L');
	$pdf->Cell(60,10,"$today_date",0,1,'L');
	$pdf->Cell(130,10,'',0,1,'L');
	$pdf->Cell(130,10,'',0,1,'L');
	$pdf->Cell(38,10,"",0,0,'L');
	$pdf->Cell(30,10,"$c_name",0,0,'L');
	$pdf->Cell(26,10,"",0,0,'L');
	$pdf->Cell(40,10,"$c_company",0,1,'L');
	$pdf->Cell(10,12,"",0,0,'L');
	$pdf->Cell(40,12,"$paid",0,0,'C');
	$pdf->Cell(60,12,"$new_balance",0,1,'C');

	$pdf->Output();
?>