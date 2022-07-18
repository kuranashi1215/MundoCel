<?php
require 'fpdf/fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // $this->Image('../img/images/logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',6);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'productos',1,0,'C');
    // Salto de línea
    $this->Ln(15);

    $this->cell(10,10,'id',1,0,'C',0);
    $this->cell(15,10,'nombre',1,0,'C',0);
    $this->cell(50,10, 'descripcion',1,0,'C',0);
    $this->cell(20,10,'precio',1,0,'C',0);
    $this->cell(15,10,'descuento',1,0,'C',0);
    $this->cell(20,10,'id_categoria',1,0,'C',0);
    $this->cell(10,10,'activo',1,0,'C',0);
    $this->cell(15,10,'color',1,0,'C',0);
    $this->cell(15,10,'medidas',1,0,'C',0);
    $this->cell(15,10,'cantidad',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
function ChapterBody($file)
{
    // Leemos el fichero
    $txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Times','',12);
    // Imprimimos el texto justificado
    $this->MultiCell(0,5,$txt);
    // Salto de línea
    $this->Ln();
    // Cita en itálica
    $this->SetFont('','I');
    $this->Cell(0,5,'(fin del extracto)');
}
}
require 'modelo/conexion.php';
$consulta = "SELECT * FROM productos";
$resultado =$conexion->query($consulta);


$pdf = new PDF();
$pdf ->aliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);

while($row = $resultado->fetch_assoc()){
    $pdf->cell(10,10, $row['id'],1,0,'C',0);
    $pdf->cell(15,10, $row['nombre'],1,0,'C',0);
    $pdf->cell(50,10, $row['descripcion'],1,0,'C',0);
    $pdf->cell(20,10, $row['precio'],1,0,'C',0);
    $pdf->cell(15,10, $row['descuento'],1,0,'C',0);
    $pdf->cell(20,10, $row['id_categoria'],1,0,'C',0);
    $pdf->cell(10,10, $row['activo'],1,0,'C',0);
    $pdf->cell(15,10, $row['color'],1,0,'C',0);
    $pdf->cell(15,10, $row['medidas'],1,0,'C',0);
    $pdf->cell(15,10, $row['cantidad'],1,1,'C',0);

}


$pdf->Output();
?>