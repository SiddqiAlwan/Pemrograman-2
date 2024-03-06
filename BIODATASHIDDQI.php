<html>

<body>
    <form action="" method="POST">
        <H1>Biodata</h1>
        Nama: Muhammad Shiddqi Alwan<br><br>
        NIM: 211011401721 <br><br>
        Fakultas: Teknik Informatika<br><br>
        Kelas: 06TPLM005<br><br>
        Email: alwan.siddqi2508@gmail.com<br><br>

       
    </form>
</body>

</html>
<?php
if ($_POST) {
    echo "<h1>Biodata</h1>";
    echo "Nama: " . $_POST["nama"] . "<br>";
    echo "Nim: " . $_POST["nim"] . "<br>";
    echo "Fakultas: " . $_POST["fakultas"] . "<br>";
    echo "Kelas: " . $_POST["kelas"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    
}
?>