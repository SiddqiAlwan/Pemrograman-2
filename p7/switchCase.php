<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan pertemuan 3</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <input type="text" name="nilai1" placeholder="Nilai 1" required>
            <select name="operator" id="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="nilai2" placeholder="Nilai 2">
            <input type="submit" name="submit" value="Submit" required>
        </form>
        </br>
    </center>

    <?php 
        if(isset($_POST['submit'])) {
            $operator = $_POST["operator"];
            $nilai1 = $_POST['nilai1'];
            $nilai2 = $_POST['nilai2'];

            switch($operator) {
                case "+":
                    echo "<center><font size=5>$nilai1 + $nilai2 = ". $nilai1 + $nilai2 . "</font></center>";
                    break;
                case "-":
                    echo "<center><font size=5>$nilai1 - $nilai2 = ". $nilai1 - $nilai2 . "</font></center>";
                    break;
                case "*":
                    echo "<center><font size=5>$nilai1 x $nilai2 = ". $nilai1 * $nilai2 . "</font></center>";
                    break;
                case "/":
                    echo "<center><font size=5>$nilai1 : $nilai2 = ". $nilai1 / $nilai2 . "</font></center>";
                    break;
                default: 
                    echo "Masukan nilai terlebih dahulu!";
            }

            echo "";
        }
    ?>

</body>
</html>