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
        $this->Cell(100, 10, 'PRODUCTOS INGRESADOS', 1, 0, 'C');
        // Salto de línea
        $this->Ln(36);
        $this -> setX(6);
        $this -> cell(10,10, 'N', 'B', 0, 'c', 0);
        $this -> cell(57,10, 'Producto', 1, 0, 'c', 0);
        $this -> cell(35,10, 'Precio', 1, 0, 'c', 0);
        $this -> cell(13,10, 'Des%', 1, 0, 'c', 0);
        $this -> cell(30,10, 'Color', 1, 0, 'c', 0);
        $this -> cell(38,10, 'Medidas', 1, 0, 'c', 0);
        $this -> cell(15,10, 'Cant', 'B', 1, 'c', 0);

        
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


$sql = "SELECT * FROM productos";
$resultado = $mysqli->query($sql);

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 14);


$pdf -> SetFillColor(233, 229, 235);
$pdf -> SetDrawColor(61, 61, 61);

while($row = $resultado -> fetch_assoc()){
    $pdf->Ln(0.9);
    $pdf -> setX(6);
    $pdf -> cell(10,10, $row['codigoproducto'], 'B', 0, 'c', 1);
    $pdf -> cell(57,10, $row['descripcion'], 1, 0, 'c', 1);
    $pdf -> cell(35,10, $row['precio'], 1, 0, 'c', 1);
    $pdf -> cell(13,10, $row['descuento'], 1, 0, 'c', 1);
    $pdf -> cell(30,10, $row['color'], 1, 0, 'c', 1);
    $pdf -> cell(38,10, $row['medidas'], 1, 0, 'c', 1);
    $pdf -> cell(15,10, $row['cantidad'], 'B', 1, 'c', 1);
}

$pdf->Output();
