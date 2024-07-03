<?php
session_start();
include 'koneksi.php';
require('fpdf186/fpdf.php');

if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}


$countries = $conn->query("SELECT negara.*, groups.group_name FROM negara JOIN groups ON negara.groups_id = groups.id");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

// Membuat header kolom
$pdf->Cell(40, 10, 'Group', 1);
$pdf->Cell(40, 10, 'Country', 1);
$pdf->Cell(20, 10, 'Wins', 1);
$pdf->Cell(20, 10, 'Draws', 1);
$pdf->Cell(20, 10, 'Losses', 1);
$pdf->Cell(20, 10, 'Points', 1);
$pdf->Ln();

// Mengisi data ke dalam tabel
$pdf->SetFont('Arial', '', 12);
while ($row = $countries->fetch_assoc()) {
    $pdf->Cell(40, 10, $row['group_name'], 1);
    $pdf->Cell(40, 10, $row['nama_negara'], 1);
    $pdf->Cell(20, 10, $row['menang'], 1);
    $pdf->Cell(20, 10, $row['draw'], 1);
    $pdf->Cell(20, 10, $row['kalah'], 1);
    $pdf->Cell(20, 10, $row['points'], 1);
    $pdf->Ln();
}

// Output file PDF
$pdf->Output();
?>
