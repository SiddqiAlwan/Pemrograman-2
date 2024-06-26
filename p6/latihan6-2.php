<?php
    session_start();

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
            session_destroy();
        }
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
        <input type="text" name="alas"> </br></br>
        <label for="Luas">Tinggi : </label>
        <input type="text" name="tinggi"> </br></br>
        <input type="submit" name="proses" value="Proses">
    </form>
    <table border="1">
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
