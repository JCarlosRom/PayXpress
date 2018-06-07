<?php
require('fpdf/fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);


$pdf->Cell(190, 10, 'REGISTRO PARA BASE',0,1,'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(190, 10, 'Fecha: '.date('d-m-Y').'', 0,0,'C');
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE REGISTROS', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(30, 8, 'RFC', 1);
//$pdf->Cell(40, 8, 'Dirección', 0);
$pdf->Cell(40,8,utf8_decode("Producto"),1);

$pdf->Cell(25, 8, 'Cantidad', 1);
$pdf->Cell(25, 8, 'Tipo de pago', 1);
$pdf->Cell(30, 8, 'Tipo de comprobante', 1);
$pdf->Cell(30, 8, 'Total', 1);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
include('clases/Persona.class.php');

$Content= new Persona();

$data=($Content->Temporal_open());

$Total=0;  

for ($i=0; $i <count($data) ; $i++) {

  $pdf->Cell(30, 8, $data[$i][1], 1);
  $pdf->Cell(40, 8, $data[$i][2], 1);
  $pdf->Cell(25, 8, "   ".$data[$i][3], 1);
  $pdf->Cell(25, 8, $data[$i][4], 1);
  $pdf->Cell(30, 8, $data[$i][5], 1);
  $pdf->Cell(30, 8, "   $".$data[$i][6], 1);
  $Total+=$data[$i][6];
  $pdf->Ln(8);
}


$pdf->Cell(30,8,"Total: ",1);
$pdf->Cell(40,8,$Total,1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);

$pdf->Output('D',"Ticket.pdf",true);



?>
