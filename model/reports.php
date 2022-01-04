<?php
require('../assets/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image("../assets/img/Logo-rezised.png",10,10);
    // Arial bold 12
    $this->SetFont("Arial","B",12);
    // Bajar titulo
    $this->Ln(15);
    //espacio a la derecha
    $this->Cell(60);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}