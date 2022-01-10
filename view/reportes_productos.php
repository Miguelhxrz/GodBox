<?php 
require_once('../model/reports.php');
require_once('../model/object.php');

date_default_timezone_set('America/Caracas');

  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();


  // Título
  $pdf->Cell(150, 5, "Reporte de Objetos Registrados", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(30, 5, "ID", 1, 0, "C");
  $pdf->Cell(30, 5, "Nombre", 1, 0, "C");
  $pdf->Cell(30, 5, "Stock", 1, 0, "C");
  $pdf->Cell(30, 5, "Precio", 1, 0, "C");
  $pdf->Cell(30, 5, "Patrocinador", 1, 0, "C");
  $pdf->Cell(30, 5, "Rango", 1, 0, "C");
  $pdf->Cell(30, 5, "Fecha de Registro", 1, 0, "C");
  $pdf->Cell(30, 5, "Categoria", 1, 1, "C");
  

  $pdf->SetFont("Arial","",9);

  $item = new object_;
  $question = $item->ShowObjects();
  for($i=0; $i<count($question); $i++){
    //`id`, `name`, `stock`, `price`, `sponsor`, `rank`, `category`, `fecha de registro`
    
    $pdf->Cell(30, 5, $question[$i]['id'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['name'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['stock'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['price'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['sponsor'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['rank'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['fecha de registro'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['category'], 1, 1, "C");
  }

  $pdf->Output();
?> 