<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan pertemuan 5</title>
</head>
<body>
    
    <?php 
    $nameFile = "bukutamu.dat";
    if(isset($_POST['submit'])) {
        if(!file_exists($nameFile)) {
            $file = fopen($nameFile, 'w');
            fclose($file);
        }
        
        $name = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $file = fopen($nameFile, 'a+');
        $txt = "Nama : $name\n" . 
                "Email : $email\n" . 
                "Komentar : $komentar\n" .
                "-------------------------\n";

        fwrite($file, $txt);
        fclose($file);
        
        echo "Data berhasil disimpan";
    }
    ?>
        
    <form action="" method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required></br></br>
        <label for="nama">Email : </label>
        <input type="email" name="email" required></br></br>
        <label for="komentar">Komentar : </label>
        <textarea name="komentar" id="komentar" cols="50" rows="5"></textarea>
        <button type="submit" name="submit" style="display: block; padding: 10px; margin: 15px 30px; cursor: pointer;">Simpan</button>
    </form>
</body>
</html>
