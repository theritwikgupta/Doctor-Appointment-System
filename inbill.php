<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$day=$_POST['day'];
$date=$_POST['date'];
$bill=$_POST['bill'];
$mno=$_POST['mno'];
$age=$_POST['age'];
$amt=$_POST['amt'];
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
$pdf->SetFont('Times','B',16);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(276,10,'Patient Bill Details',1,0,'C');
$pdf->Ln(20);
 $pdf->SetTextColor(0,0,0);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,"Bill  Number: {$bill}",0,0);
$pdf->Cell(390,5, " Date : {$date} ",0,0,'C');
$pdf->Ln(12);
$pdf->Cell(24,5,"Name:  {$fname} {$lname}",0,0);
$pdf->Cell(390,5, "Day: {$day}  ",0,0,'C');
$pdf->Ln(12);
$pdf->Cell(24,5,"Patient Email ID: {$username} ",0,0);
$pdf->Cell(376,5, " Age : {$age} ",0,0,'C');
$pdf->Ln(12);
$pdf->Cell(24,5,"Mobile Number :{$mno} ",0,0);
$pdf->Ln(12);
$pdf->SetFont('Times','B',14);
$pdf->Cell(30,5,"Particulars : ",0,0,"C");
$pdf->Ln(40);
$pdf->SetFont('Times','B',20);
$pdf->Cell(460,5, "Total:  Rs. {$amt}/-  ",0,0,'C');
$pdf->Ln(12);
$pdf->SetFont('Times','B',14);
$pdf->Cell(460,5, "Signature: ",0,0,'C');
$pdf->Ln(4);



$pdf->Ln(15);

$pdf->SetFont('Times','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(276,10,'Email :prathmshirke1712@gmail.com | Contact No: 9673145747',0,0,'C');
$pdf->output();



?>