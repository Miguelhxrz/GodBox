<?php 
require ('../model/reports.php');
require_once('../model/sponsor.php');

date_default_timezone_set('America/Caracas');


  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();


  // Título
  $pdf->Cell(150, 5, "Reporte de Patrocinadores Registrados", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(45);
  $pdf->Cell(30, 5, "Rif", 1, 0, "C");
  $pdf->Cell(30, 5, "Nombre", 1, 0, "C");
  $pdf->Cell(80, 5, "Correo Electronico", 1, 0, "C");
  $pdf->Cell(30, 5, "Fecha de registro", 1, 1, "C");

  $pdf->SetFont("Arial","",9);

  $sponsor = new sponsor;
  $question = $sponsor->ShowSponsors();
  for($i=0; $i<count($question); $i++){
    //`name`, `rif`, `email`, `image`, `fecha de registro`
    $pdf->Cell(45);
    $pdf->Cell(30, 5, $question[$i]['rif'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['name'], 1, 0, "C");
    $pdf->Cell(80, 5, $question[$i]['email'], 1, 0, "C");
    $pdf->Cell(30, 5, $question[$i]['fecha de registro'], 1, 1, "C");
  }

  $pdf->Output();
?> 