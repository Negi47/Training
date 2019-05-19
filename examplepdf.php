<?php
require_once("./database/dataconnect.php");

$retrieve_data = "select * from feedback where eid=" .$_GET['eid'];
	
$result = $con->query($retrieve_data);
$rslt = [];
while($row = $result->fetch_assoc())
    $rslt[] = $row;

require "./fpdf181/fpdf.php";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);		
$y_axis = 30;
$pdf->Image('./Images/logo.png',5,5,-1400);
$pdf->Text(75,22,'Ramaiah Institute of Technology');
foreach($rslt as $row) {
    $y_axis += 10;
    
	$pdf->SetFont('Arial','',10);	

        $pdf->Ln();
        
        
		$pdf->Text(15,$y_axis,'Name '.$row['empname']);
}
$pdf->Output();
?>