<?php 
require ('../model/reports.php');
require_once('../model/coins.php');

date_default_timezone_set('America/Caracas');


  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();


  // Título
  $pdf->Cell(150, 5, "Reporte de Monedas Registradas", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(75);
  $pdf->Cell(30, 5, "ID", 1, 0, "C");
  $pdf->Cell(30, 5, "Cantidad", 1, 0, "C");
  $pdf->Cell(30, 5, "Precio", 1, 0, "C");
  $pdf->Cell(30, 5, "Fecha de registro", 1, 1, "C");

  $pdf->SetFont("Arial","",9);

  $coins = new coins;
  $question = $coins->showCoins();
  for($i=0; $i<count($question); $i++){
    //`ID`, `quantity`, `price`, `fecha de registro`
    $pdf->Cell(75);
    $pdf->Cell(30, 5, $question[$i]['id'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['quantity'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['price'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['Fecha de registro'], 1, 1, "C");
  }

  $pdf->Output();
?> 