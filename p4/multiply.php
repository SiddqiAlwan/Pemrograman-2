<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fordis Pertemuan 4</title>
</head>
<body>
    <h1>Perkalian 1 sampai 10</h1>
    <table border="1">
    <?php 
        for ($i=1; $i <= 10 ; $i++) {
            echo "<tr> <td>" . 1 . " x " . $i . " = ". $i * $i ."</td>"; 
            for ($j=2; $j <= 10; $j++) {
                echo "<td>" . $j . " x " . $i . " = " . $i * $j. "</td>";
            }
            "</tr>";
        }
    ?>
    </table>
</body>
</html>