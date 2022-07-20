<?php
require 'fpdf/fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo1.png',170,5,30);
    $this->Image('logo.png',10,20,50);
    $this->Ln(20);
    // $this->Image('../img/images/logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',6);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'PRODUCTOS REGISTRADOS',0,0,'C');
    // Salto de línea
    $this->Ln(15);

    $this->cell(10,10,'CODE',1,0,'C',0);
    $this->cell(40,10,'USER',1,0,'C',0);
    $this->cell(90,10, 'PASSWORD',1,1,'C',0);
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
$consulta = "SELECT * FROM user";
$resultado =$conexion->query($consulta);


$pdf = new PDF();
$pdf ->aliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);

while($row = $resultado->fetch_assoc()){
    $pdf->cell(10,10, $row['CODE'],1,0,'C',0);
    $pdf->cell(40,10, $row['USER'],1,0,'C',0);
    $pdf->cell(90,10,password_hash($row['PASSWORD'], PASSWORD_DEFAULT) ,1,1,'C',0);

}


$pdf->Output();
?>