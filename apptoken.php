<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$doc=$_POST['doc'];
$sess=$_POST['sess'];
$date=$_POST['setdate'];
$pid=$_POST['pid'];
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
$pdf->Cell(276,10,'Appointment Details',1,0,'C');
$pdf->Ln(20);
 $pdf->SetTextColor(0,0,0);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Hospital Registration Number: 3417',0,0);
$pdf->Cell(420,5, "Appointment Date(mm/dd/yyyy): {$date} ",0,0,'C');
$pdf->Ln(12);
$pdf->Cell(24,5,"Patient Name:  {$fname} {$lname}",0,0);
$pdf->Cell(377,5, "Patient Token ID: {$pid} ",0,0,'C');
$pdf->Ln(12);
$pdf->Cell(24,5,"Patient Email ID: {$username} ",0,0);
$pdf->Ln(12);
$pdf->Cell(24,5,"Doctor : Dr.{$doc} ",0,0);
$pdf->Ln(12);
$pdf->SetFont('Times','B',14);
$pdf->Cell(110,5,"Appointment Time : {$sess}",0,0,"C");
$pdf->Ln(16);



$pdf->Ln(50);

$pdf->SetFont('Times','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(276,10,'Email :prathmshirke1712@gmail.com | Contact No: 9673145747',0,0,'C');
$pdf->output();



?>