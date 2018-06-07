<?php
require('fpdf/fpdf.php');



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);

$pdf->Cell(0, 0,'TINTAXPRESS', 0, 1,"C", False);
$pdf->SetFont('Arial','B',9);
$pdf->Ln(5);
$pdf->Cell(0, 0,utf8_decode('LA SOLUCION A TU IMPRESIÓN'), 0, 1,"C", False);
$pdf->Ln(5);
$pdf->Cell(0,0,utf8_decode('Dirección: Calle Ignacio Sandoval
  No. 750 Lomas de Circunvalación, Colima, Colima'),0,1,"C", False);
$pdf->Ln(5);
$pdf->Cell(0,0,'C.P. 28010, Telefono: (312)
    313 - 7366',0,1,"C", False);
    $pdf->Ln(5);
$pdf->Cell(0,0,'Jesus Tadeo Natera Gonzalez',0,1,"C", False);
$pdf->Ln(4);
$pdf->Cell(0,0,'RFC: NAGJ8110227E7',0,1,"C", False);
$pdf->Ln(5);
$pdf->Cell(0,0,'SUCURSALES: SF=SAN FERNANDO | AY=AYUNTAMIENTO | IS=IGNACIO SANDOVAL',0,1,"C", False);

$pdf->SetFont('Arial','B',12);
$pdf->Ln(10);
$pdf->Cell(0,0,'REPORTE DE VENTAS',0,1,"C", False);
$pdf->Ln(4);

// $pdf->Cell(190, 10, 'Fecha: '.date('d-m-Y').'', 0,0,'C');
//$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
// $pdf->Cell(100, 8, 'LISTADO DE REGISTROS', 0);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(15, 8, 'IdVenta', 1);
//$pdf->Cell(40, 8, 'Dirección', 0);
$pdf->Cell(20,8,utf8_decode("IdEmpleado"),1);

$pdf->Cell(15, 8, 'IdCliente', 1);
$pdf->Cell(15, 8, 'Cantidad', 1);
$pdf->Cell(30, 8, 'Producto', 1);
$pdf->Cell(20, 8, 'Fecha Venta', 1);
$pdf->Cell(15, 8, 'Total', 1);
$pdf->Cell(20, 8, 'Forma Pago', 1);
$pdf->Cell(28, 8, 'Tipo comprobante', 1);
$pdf->Cell(15, 8, 'Sucursal', 1);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
include('clases/Persona.class.php');

$Content= new Persona();

$data=($Content->Temporal_venta());

// $user=($Content->usuario());
//   $pdf->Cell(15, 8, $user, 1);




for ($i=0; $i <count($data) ; $i++) {

  $pdf->Cell(15, 8, $data[$i][1], 1);
  $pdf->Cell(20, 8, $data[$i][2], 1);
  $pdf->Cell(15, 8, $data[$i][3], 1);
  $pdf->Cell(15, 8, $data[$i][7], 1);
  $pdf->Cell(30, 8, $data[$i][4], 1);
  $pdf->Cell(20, 8, $data[$i][5], 1);
  $pdf->Cell(15, 8, $data[$i][6], 1);
  $pdf->Cell(20, 8, $data[$i][10], 1);
  $pdf->Cell(28, 8, $data[$i][11], 1);
  $pdf->Cell(15, 8, $data[$i][20], 1);

  $pdf->Ln(8);
}




$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Image('LOGO0.jpg' , 88 ,230, 35 , 38,'JPG');
$pdf->Ln(110);
$pdf->Cell(0, 0,'GRACIAS POR SU COMPRA', 0, 1,"C", False);

$pdf->Output('D',"Ticket.pdf",true);



?>
