<?php 

    include 'koneksi.php';

    $kategori = "SELECT * FROM tblKategori";
    $result = mysqli_query($conn, $kategori);

    if(isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "INSERT INTO tblKategori(nama_kategori) VALUES ('$kategori')";
        $tambah = mysqli_query($conn, $sql);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>All Kategori</legend>
        <ol>
            <?php foreach($result as $data) : ?>
                <li><?= $data['nama_kategori'] ?></li>
            <?php endforeach; ?>
        </ol>
    </fieldset>
    <form action="" method="POST">
        <fieldset>
            <legend>Tambah Kategori</legend>

            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" required>
            <input type="submit" value="simpan" name="simpan">
        </fieldset>
    </form>
    </br>
    <a href="berita.php">kembali ke berita</a>
</body>
</html>