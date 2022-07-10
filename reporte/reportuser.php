<?php
require('vendor/fpdf.php');
require('conexion.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        
        // Logo
        $this->Image('img/mundocel.png', 15, 10, 51);

        
        // Arial bold 15
        $this->SetFont('Arial', 'B', 12);

        $this ->cell(100, 0, 'Fecha: '.date('d-m-y').'', 0, 100, 'c', 0);
        // Movernos a la derecha
        $this->Ln(25);

        $this->Cell(60);
        // Título
        $this->Cell(100, 10, 'USUARIOS', 1, 0, 'C');
        // Salto de línea
        $this->Ln(36);
        $this -> setX(25);
        $this -> cell(40,10, 'N', 1, 0, 'c', 0);
        $this -> cell(60,10, 'Usuarios', 1, 0, 'c', 0);
        $this -> cell(60,10, 'Passwords', 1, 0, 'c', 0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 10);
        // Número de página
        $this->Cell(0, 20, utf8_decode('Pagina') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}


$sql = "SELECT * FROM user";
$resultado = $mysqli->query($sql);

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 14);


$pdf -> SetFillColor(233, 229, 235);
$pdf -> SetDrawColor(61, 61, 61);
$pdf->Ln(10);
while($row = $resultado -> fetch_assoc()){
    $pdf->Ln(0.9);
    $pdf -> setX(25);
    $pdf -> cell(40,10, $row['CODE'], 'B', 0, 'c', 1);
    $pdf -> cell(60,10, $row['USER'], 1, 0, 'c', 1);
    $pdf -> cell(60,10, $row['PASSWORD'], 'B', 1, 'c', 1);
}

$pdf->Output();
