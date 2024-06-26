<?php 

include 'koneksi.php';

$sql = "SELECT * FROM tblKategori";
$query = mysqli_query($conn, $sql);
$kategori = $query->fetch_all(MYSQLI_ASSOC);

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $idKategori = $_POST['kategori'];
    $isi = $_POST['isi'];
    $penulis = $_POST['penulis'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO tblBerita (judulBerita, isiBerita, penulis, tgldipublish, idKategori) VALUES ('$judul', '$isi', '$penulis', '$tanggal', '$idKategori')";
    $tambah = mysqli_query($conn, $sql);

    if ($tambah) {
        header("Location: berita.php");
    } else {
        echo "Error: " . mysqli_error($conn); 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Tambah Berita</legend>

            <label for="judul">Judul Berita</label>
            <input type="text" name="judul" id="judul" required>
            <br>

            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" required>
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategori as $value) : ?>
                    <option value="<?= $value['idKategori'] ?>"><?= $value['nama_kategori'] ?></option>
                <?php endforeach; ?>
            </select>
            <br>

            <label for="isi">Isi Berita</label>
            <textarea name="isi" id="isi" cols="30" rows="10" required></textarea>
            <br>

            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" required>
            <br>

            <label for="tanggal">Tanggal Publish</label>
            <input type="date" name="tanggal" id="tanggal" required>
            <br>
            <input type="submit" value="Simpan" name="simpan">
        </fieldset>
    </form>
</body>
</html>
