<?php
    if (!isset($_SESSION['segitiga'])) {
        $_SESSION['segitiga'] = [];
    }
    if (isset($_POST['proses'])) {
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        if (count($_SESSION['segitiga']) < 5) {
            $luas = 0.5 * $alas * $tinggi;
            $_SESSION['segitiga'][] = array("alas" => $alas, "tinggi" => $tinggi, "luas" => $luas);
        } else {
            session_unset();
        }
    }
    if(isset($_POST['reset'])) {
        session_unset();
        $_SESSION['segitiga'] = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertemuan 6</title>
</head>
<body>
    <form action="" method="post">
        <label for="Luas">Alas : </label>
        <input type="text" name="alas"> </br>
        <label for="Luas">Tinggi : </label>
        <input type="text" name="tinggi"> </br>
        <input type="submit" name="proses" value="Proses"> 
        <input type="submit" name="reset" value="Reset"> </br> </br>
    </form>
    <table border="1" width="30%">
        <tr>
            <th>Alas</th>
            <th>Tinggi</th>
            <th>Luas</th>
        </tr>
        <?php
            foreach ($_SESSION['segitiga'] as $data) {
                echo "<tr>";
                echo "<td>{$data['alas']}</td>";
                echo "<td>{$data['tinggi']}</td>";
                echo "<td>{$data['luas']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
