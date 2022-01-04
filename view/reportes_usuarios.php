<?php 
require ('../model/reports.php');
require_once('../model/user.php');

date_default_timezone_set('America/Caracas');

  $pdf = new PDF("L", "mm", "Letter");
  $pdf->AddPage();
  $pdf->AliasNbPages();

  // Título
  $pdf->Cell(150, 5, "Reporte de Usuarios Registrados", 0, 0, "C");
  //Fecha
  $pdf->Cell(0, 5, "Fecha: ". date("d/m/Y"), 0, 2, "C");
  // Salto de línea
  $pdf->Ln(15);
  

  $pdf->SetFont("Arial","B",9);
  $pdf->Cell(20, 5, "Usuario", 1, 0, "C");
  $pdf->Cell(40, 5, utf8_decode('Contraseña'), 1, 0, "C");
  $pdf->Cell(30, 5, "ID", 1, 0, "C");
  $pdf->Cell(70, 5, "Correo Electronico", 1, 0, "C");
  $pdf->Cell(60, 5, "Direccion", 1, 0, "C");
  $pdf->Cell(40, 5, "Fecha de Nacimiento", 1, 1, "C");

  $pdf->SetFont("Arial","",9);

  $user = new user;
  $question = $user->ShowUsers();
  while ($fila= mysqli_fetch_array($question)){
    //username`, `password`, `id`, `email`, `address`, `birth`
    
    $pdf->Cell(20, 5, $fila['username'], 1, 0, "C");
    $pdf->Cell(40, 5, $fila['password'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['id'], 1, 0, "C");
    $pdf->Cell(70, 5, $fila['email'], 1, 0, "C");
    $pdf->Cell(60, 5, $fila['address'], 1, 0, "C");
    $pdf->Cell(40, 5, $fila['birth'], 1, 1, "C");
  }

  $pdf->Output();
?> 
      