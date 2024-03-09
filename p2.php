
<?php
$nama   = $_POST['nama'];

$jurusan  = $_POST['jurusan'];

$nilaitugas  = $_POST['nilaitugas'];

$nilaiuts  = $_POST['nilaiuts'];

$nilaiuas    = $_POST['nilaiuas'];



$nilaitugas = $nilaitugas * 0.2;

$nilaiuts   = $nilaiuts * 0.3;

$nilaiuas   = $nilaiuas * 0.4;


$nilai_akhir = $nilaitugas + $nilaiuts + $nilaiuas;

 

if ($nilai_akhir>=80)

{

$grade = "A";

}

elseif ($nilai_akhir>=70)

{

$grade = "B";

}

elseif ($nilai_akhir>=50)

{

$grade = "C";

}

elseif ($nilai_akhir>=40)

{

$grade = "D";

}

else

{

$grade = "E";

}

 
echo

"

<h1>Hitung Nilai AKhir Mahasiswa</h1>

 

Nama Mahasiswa : $nama <br>

Nilai Tugas : <b>$nilaitugas</b><br>

Nilai UTS   : <b>$nilaiuts</b><br>

Nilai UAS   : <b>$nilaiuas</b><br>

 
<h4>Nilai Akhir : $nilai_akhir</h4>

<h4>Grade : $grade</h4>

";

?>

<html>
<head>
    <title>Penambahan Nilai</title>
</head>
<body>

<?php
// Mendefinisikan nilai 1 dan nilai 2
$nilai1 = 5;
$nilai2 = 8;

// Melakukan perhitungan penambahan
$hasil = $nilai1 + $nilai2;
?>

<h2>Hasil Penambahan:</h2>
<p>Nilai 1: <?php echo $nilai1; ?></p>
<p>Nilai 2: <?php echo $nilai2; ?></p>
<p>Hasil: <?php echo $hasil; ?></p>

</body>
</html>

<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $operator = $_POST["operator"];

    // Melakukan perhitungan sesuai operasi aritmatika yang dipilih
    switch ($operator) {
        case "tambah":
            $hasil = $nilai1 + $nilai2;
            $operasi = "Penambahan";
            break;
        case "kurang":
            $hasil = $nilai1 - $nilai2;
            $operasi = "Pengurangan";
            break;
        case "kali":
            $hasil = $nilai1 * $nilai2;
            $operasi = "Perkalian";
            break;
        case "bagi":
            if ($nilai2 != 0) {
                $hasil = $nilai1 / $nilai2;
                $operasi = "Pembagian";
            } else {
                $hasil = "Tidak dapat melakukan pembagian oleh 0.";
                $operasi = "Pembagian";
            }
            break;
        default:
            $hasil = "Operasi tidak valid.";
            $operasi = "";
    }
}
?>

<h2>Hasil Perhitungan:</h2>
<p>Operasi: <?php echo $operasi; ?></p>
<p>Nilai 1: <?php echo $nilai1; ?></p>
<p>Nilai 2: <?php echo $nilai2; ?></p>
<p>Hasil: <?php echo $hasil; ?></p>

</body>
</html>