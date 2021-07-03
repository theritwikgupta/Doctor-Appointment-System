<?php
require ("fpdf/fpdf.php");
$con=new mysqli("localhost","root","","new");
$pdf=new FPDF('L','mm','A4');
$pdf ->AddPage();
 $pdf->Image('doc.png',10,6,30);
$pdf ->SetFont( 'Times' , 'B', 36);
$pdf->SetFont('Times','B',24);
$pdf->SetTextColor(30,144,255);
$pdf->Cell(276,5,'24/7 HOSPITAL',0,0,'C');

$pdf->Ln(7);

$pdf->SetFont('Times','B',21);
$pdf->Cell(276,10,'Address: S.No.124, Paud Road, Kothrud, Pune, 411038.',0,0,'C');
$pdf->Ln(20);
$pdf->SetFont('Times','B',18);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(276,10,'PATIENT BILL LIST',0,0,'C');
$pdf->Ln(9);
$pdf ->SetFont('Times','B',14);
$pdf->Cell(30,10,'Bill Number',1,0,'C');
$pdf->Cell(30,10,'Date',1,0,'C');
$pdf->Cell(30,10,'First Name',1,0,'C');
$pdf->Cell(30,10,'Last Name',1,0,'C');
$pdf->Cell(18,10,'Age',1,0,'C');
$pdf->Cell(66,10,'Email ID',1,0,'C');
$pdf->Cell(40,10,'Mobile Number',1,0,'C');
$pdf->Cell(21,10,'Amount',1,0,'C');
$pdf->Ln();
$sql="select * from billpay ";
$res=$con->query($sql);
$i=0;
if($res->num_rows>0)
      {
while($row=$res->fetch_assoc())
               {
$i++;

                    {
$pdf->SetFont('Times','',12);
$pdf->Cell(30,10,$row["billno"],1,0,'C');

$pdf->Cell(30,10,$row["date"]  ,1,0,'C');
$pdf->Cell(30,10,$row["fname"],1,0,'C');
$pdf->Cell(30,10,$row["lname"],1,0,'C');
$pdf->Cell(18,10,$row["age"],1,0,'C');
$pdf->Cell(66,10,$row["username"],1,0,'C');
$pdf->Cell(40,10,$row["mno"],1,0,'C');
$pdf->Cell(21,10,$row["amt"],1,0,'C');
$pdf->Ln();
}
}
}

$pdf->output();