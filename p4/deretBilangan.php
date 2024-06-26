<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fordis Pertemuan 4</title>
</head>
<body>
    <?php 
        $deretBilangan = '';
        $strTambah = '';
        $jml = 0;
        $jmlDeret = 0;
        if(isset($_POST['hitung'])) {
            $nilaiAwal = $_POST['awal'];
            $nilaiAkhir = $_POST['akhir'];
            for($i = $nilaiAwal; $i <= $nilaiAkhir; $i++) {
                if($i % 2 !== 0 && $i % 3 === 0) {
                    $deretBilangan .= $i . ", ";
                    $jml++;
                    $strTambah .= $i . " + ";
                    $jmlDeret += $i;
                }
            }
            if(!empty($strTambah)) {
                $strTambah = rtrim($strTambah, " + ");
            }

        }
    ?>

    <form action="" method="post">
        <label for="nilaiAwal">Nilai Awal : </label>
        <input type="text" name="awal"> </br>
        <label for="nilaiAkhir">Nilai Akhir : </label>
        <input type="text" name="akhir"> </br>
        <input type="submit" name="hitung" value="hitung">
    </form>

    <?php if(isset($_POST['hitung'])) { ?>
        <p>Maka deret bilangan : <?= $deretBilangan ?></p>
        <p>Maka deret bilangan : <?= $jml ?></p>
        <p>Jumlah nilai Bilangan : <?= $strTambah . " = " . $jmlDeret ?></p>
    <?php }?> 

</body>
</html>