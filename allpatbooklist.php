<?php
require ("fpdf/fpdf.php");
$con=new mysqli("localhost","root","","new");
$pdf=new FPDF('L','mm','A4');
$pdf ->AddPage();
 $pdf->Image('doc.png',10,6,30);
$pdf ->SetFont( 'Times' , 'B', 18);
$pdf->SetFont('Times','B',36);
$pdf->SetTextColor(30,144,255);
$pdf->Cell(276,5,'24/7 HOSPITAL',0,0,'C');

$pdf->Ln(7);

$pdf->SetFont('Times','B',16);
$pdf->Cell(276,10,'Address: S.No.124, Paud Road, Kothrud, Pune, 411038.',0,0,'C');
$pdf->Ln(20);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Times','B',20);
$pdf->Cell(276,10,'List Of Patients Booked Appointment',6,0,'C');
$pdf->Ln(9);
$pdf ->SetFont('Times','B',14);

$pdf->Cell(32,10,'Date',1,0,'C');
$pdf->Cell(60,10,'Session',1,0,'C');
$pdf->Cell(32,10,'Doctor',1,0,'C');

$pdf->Cell(35,10,'First Name',1,0,'C');
$pdf->Cell(35,10,'Last Name',1,0,'C');
$pdf->Cell(59,10,'Email',1,0,'C');
$pdf->Cell(25,10,'Token ID',1,0,'C');
$pdf->Ln();
$sql="select * from bookapp ";
$res=$con->query($sql);
$i=0;
if($res->num_rows>0)
      {
while($row=$res->fetch_assoc())
               {
$i++;

                     {
$pdf->SetFont('Times','',12);
$pdf->Cell(32,10,$row["setdate"],1,0,'C');
$pdf->Cell(60,10,$row["sess"],1,0,'C');
$pdf->Cell(32,10,$row["doc"],1,0,'C');

$pdf->Cell(35,10,$row["fname"],1,0,'C');
$pdf->Cell(35,10,$row["lname"],1,0,'C');
$pdf->Cell(59,10,$row["username"],1,0,'C');
$pdf->Cell(25,10,$row["pid"],1,0,'C');
$pdf->Ln();
}
}
}

$pdf->output();