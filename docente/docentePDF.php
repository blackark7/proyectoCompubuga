<?php

include_once '../pdf/fpdf.php';

class PDF extends FPDF {

// Page header
    function Header() {
        // Logo
        $this->Image('../img/compubuga.jpg', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 17);
        // Move to the right
        $this->Cell(70);
        // Title
        $this->Cell(60, 10, 'Reporte de Usuarios', 0, 0, 'C');
        // Line break
        $this->Ln(30);

        $this->Cell(90, 10, 'Nombre', 1, 0, 'C', 0);
        $this->Cell(90, 10, 'Tipo', 1, 1, 'C', 0);
    }

// Page footer
    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

include_once '../pdf/1pdf.php';
$consulta = "SELECT * FROM usuarios";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 16);
$pdf->AliasNbPages();

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(90, 10, $row['user'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $row['tipo'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
