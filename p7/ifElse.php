<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 pertemuan 3</title>
</head>
<body>
     <form action="" method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required></br>

        <label for="nim">Nim : </label>
        <input type="number" name="nim" required></br>

        <label for="matkul">Mata Kuliah : </label>
        <input type="text" name="matkul" required></br>

        <label for="jumlahkehadiran">Jumlah Kehadiran : </label>
        <input type="number" name="jmlkehadiran" required></br>

        <label for="tugas">Nilai Tugas : </label>
        <input type="number" name="tugas" required></br>

        <label for="uts">Nilai UTS : </label>
        <input type="number" name="uts" required></br>

        <label for="uas">Nilai UAS : </label>
        <input type="number" name="uas" required></br>

        <input type="submit" name="submit" value="Submit">
     </form>

     <?php 
        if(isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $matkul = $_POST['matkul'];
            $jmlKhdrn = $_POST['jmlkehadiran'];
            $tugas = $_POST['tugas'] * 0.2;
            $uts = $_POST['uts'] * 0.3;
            $uas = $_POST['uas'] * 0.4;
            $avg = $jmlKhdrn + $tugas + $uts + $uas;

            if($jmlKhdrn < 18) {
                $nilaikehadiran = $jmlKhdrn * 0.1;
            }

            if($avg >= 80) {
                $grade = "A";
            } else if ($avg >= 70) {
                $grade = "B";
            } else if ($avg >= 60) {
                $grade = "C";
            } else if($avg >= 50){
                $grade = "D";
            } else {
                $grade = "E";
            }

            if($avg >= 65) {
                $keterangan = "LULUS";
            } else {
                $keterangan = "TIDAK LULUS";
            }
        }
     ?>

    <?php if(isset($_POST['submit'])) { ?>
        <h4>Nilai AKADEMIK : <?= $matkul ?></h4>
        <h4>Nama : <?= $nama ?></h4>
        <h4>Nim : <?= $nim ?></h4>

            <table border="1" width="60%">
            <tr>
                <td>Jumlah Kehadiran  </td>
                <td>: <?= $jmlKhdrn ?></td>
                <td>Nilai Kehadiran  </td>
                <td>: <?= $nilaikehadiran ?? 0 ?></td>
            </tr>
            <tr>
                <td>Nilai Tugas  </td>
                <td>: <?= $tugas ?></td>
                <td>Niai UTS  </td>
                <td>: <?= $uts ?></td>
            </tr>
            <tr>
                <td>Nilai UAS  </td>
                <td>: <?= $uas ?></td>
                <td>Nilai Akhir  </td>
                <td>: <?=  round($avg) ?></td>
            </tr>
            <tr>
                <td>Grade  </td>
                <td>: <?= $grade ?></td>
                <td>Keterangan  </td>
                <td>: <?= $keterangan ?></td>
            </tr>
        </table>

    <?php } ?>
     
</body>
</html>