<?php 
require ('../model/reports.php');
require_once('../model/box.php');

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
  $pdf->Cell(30, 5, "ID", 1, 0, "C");
  $pdf->Cell(30, 5, "Precio", 1, 0, "C");
  $pdf->Cell(30, 5, "Stock", 1, 0, "C");
  $pdf->Cell(30, 5, "Patrocinador", 1, 0, "C");
  $pdf->Cell(30, 5, "Categoria", 1, 0, "C");
  $pdf->Cell(30, 5, "Rango", 1, 0, "C");
  $pdf->Cell(30, 5, "Fecha de Registro", 1, 0, "C");
  $pdf->Cell(30, 5, "Objetos", 1, 1, "C");

  $pdf->SetFont("Arial","",9);

  $box = new box;
  $question = $box->ShowBoxes();
  while ($fila= mysqli_fetch_array($question)){
    //`id` , `name` , `price` , `stock` , `sponsor` , `category` , `rank` , `objects`,`fecha de registro`
    
    $pdf->Cell(30, 5, $fila['id'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['price'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['stock'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['sponsor'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['category'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['rank'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['fecha de registro'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['objects'], 1, 1, "C");
  }

  $pdf->Output();
?> 