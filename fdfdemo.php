<?php

require ("fpdf/fpdf.php");
class mypdf extends FPDF
{
function header()
{
$this->Image('doc.png',10,6);
$this->SetFont('Arial','B',14);
$this->Cell(276,5,'24/7 HOSPITAL',0,0,'C');
$this->Ln();
$this->SetFont('Times','B',12);
$this->Cell(276,10,'Dr.Prathamesh Shirke',0,0,'C');
$this->Ln(20);
}

function footer()
{
$this->SetY(-15);
$this->SetFont('Arial' ,' ',8);
$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');

}
}






$pdf =new mypdf();
$pdf ->AddPage('L','A4',0);
$pdf ->SetFont( 'Times' , 'B', 16);
$pdf->header();

$pdf -> output();
