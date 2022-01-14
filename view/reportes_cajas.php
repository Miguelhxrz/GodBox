<?php 
require ('../model/reports.php');
require_once('../model/box.php');
error_reporting(0);

date_default_timezone_set('America/Caracas');


  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();


  // Título
  $pdf->Cell(150, 5, "Reporte de Cajas Registradas", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(15, 5, "ID", 1, 0, "C");
  $pdf->Cell(30, 5, "Precio", 1, 0, "C");
  $pdf->Cell(30, 5, "Stock", 1, 0, "C");
  $pdf->Cell(30, 5, "Patrocinador", 1, 0, "C");
  $pdf->Cell(30, 5, "Categoria", 1, 0, "C");
  $pdf->Cell(15, 5, "Rango", 1, 0, "C");
  $pdf->Cell(30, 5, "Fecha de Registro", 1, 0, "C");
  $pdf->Cell(80, 5, "Objetos", 1, 1, "C");

  $pdf->SetFont("Arial","",9);

  $box = new box;
  $question = $box->ShowBoxes();
  for ($i=0; $i<count($question); $i++){
    //`id` , `name` , `price` , `stock` , `sponsor` , `category` , `rank` , `objects`,`fecha de registro`
    
    $pdf->Cell(15, 5, $question[$i]['id'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['price'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['stock'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['sponsor'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['category'], 1, 0, "C");
    $pdf->Cell(15, 5, $question[$i]['rank'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['fecha de registro'], 1, 0, "C");
    $pdf->Cell(80, 5, $question[$i]['objects'], 1, 1, "C");
  }

  $pdf->Output();
?> 