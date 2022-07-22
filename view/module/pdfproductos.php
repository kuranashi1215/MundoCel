<?php
require '../../fpdf/fpdf.php';
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../../view/img/logo1.png',170,5,30);
    $this->Image('../../view/img/logo.png',10,20,50);
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',6);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'PRODUCTOS REGISTRADOS',0,0,'C');
    // Salto de línea
    $this->Ln(15);

    $this->cell(10,5,'id',1,0,'C',0);
    $this->cell(15,5,'nombre',1,0,'C',0);
    $this->cell(20,5,'precio',1,0,'C',0);
    $this->cell(15,5,'descuento',1,0,'C',0);
    $this->cell(20,5,'id_categoria',1,0,'C',0);
    $this->cell(10,5,'activo',1,0,'C',0);
    $this->cell(15,5,'color',1,0,'C',0);
    $this->cell(15,5,'medidas',1,0,'C',0);
    $this->cell(12,5,'cantidad',1,0,'C',0);
    $this->cell(50,5, 'descripcion',1,1,'C',0);
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
require '../../modelo/conexion.php';
$consulta = "SELECT * FROM productos";
$resultado =$conexion->query($consulta);


$pdf = new PDF();
$pdf ->aliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);


while($row = $resultado->fetch_assoc()){
  
    $pdf->Ln(4);
 $pdf->cell(10,4, $row['id'],0,0,'C',0);
    $pdf->cell(15,4, $row['nombre'],0,0,'L',0);
    $pdf->cell(20,4, $row['precio'],0,0,'L',0);
    $pdf->cell(15,4, $row['descuento'],0,0,'L',0);
    $pdf->cell(20,4, $row['id_categoria'],0,0,'L',0);
    $pdf->cell(10,4, $row['activo'],0,0,'L',0);
    $pdf->cell(15,4, $row['color'],0,0,'L',0);
    $pdf->cell(15,4, utf8_decode($row['medidas']) ,0,0,'L',0);
    $pdf->cell(12,4, $row['cantidad'],0,0,'L',0);
    $pdf->MultiCell(50,4, utf8_decode($row['descripcion']) ,'0','L');
    $pdf->Ln(4);
    $pdf->Cell(185,0.1,'',1,1,'L',0);
    $pdf->Ln(4);

}


$pdf->Output();
?>