<?php 
    include "koneksi.php";

    $query = "SELECT * FROM tblBerita join tblKategori using(idKategori) ORDER BY tgldipublish DESC";
    $result = mysqli_query($conn, $query);

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li><a href="berita.php">Berita</a></li>
    <li><a href="kategori.php">Kategori</a></li>

    <h3>Daftar berita</h3>
    <a href="tambah.php">Tambah</a>
    <br>
    <br>
    <table border="1">
        <th>Nama Kategori</th>
        <th>Judul Berita</th>
        <th>Isi Berita</th>
        <th>Penulis</th>
        <th>Tanggal Publish</th>
        <th>Action</th>

        <?php foreach($result as $value) : ?>
        <tr>
            <td><?= $value['nama_kategori'] ?></td>
            <td><?= $value['judulBerita'] ?></td>
            <td><?= $value['isiBerita'] ?></td>
            <td><?= $value['penulis'] ?></td>
            <td><?= $value['tgldipublish'] ?></td>
            <td>
                <a href="edit.php?id=<?= $value['idBerita'] ?>">Edit</a>
                <a href="delete.php?id=<?= $value['idBerita'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>