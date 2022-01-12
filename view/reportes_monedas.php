<?php 
require_once('../model/reports.php');
require_once('../model/transaciones.php');

date_default_timezone_set('America/Caracas');

  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();


  // Título
  $pdf->Cell(150, 5, "Reporte de Transaciones de Monedas", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(55);
  $pdf->Cell(30, 5, "ID Usuario", 1, 0, "C");
  $pdf->Cell(30, 5, "ID Monedas", 1, 0, "C");
  $pdf->Cell(30, 5, "Cantidad", 1, 0, "C");
  $pdf->Cell(30, 5, "Precio", 1, 0, "C");
  $pdf->Cell(30, 5, "Fecha de Compra", 1, 1, "C");

  

  $pdf->SetFont("Arial","",9);

  $transaciones = new transaciones;
  $question = $transaciones->ShowTransaciones();
  for($i=0; $i<count($question); $i++){
    //`idusuario`,`idmonedas`, `quantity`, `price`, `fecha de compra`
    $pdf->Cell(55);
    $pdf->Cell(30, 5, $question[$i]['idusuario'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['idmonedas'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['quantity'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['price'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['fecha de compra'], 1, 1, "C");
  }

  $pdf->Output();
?> 