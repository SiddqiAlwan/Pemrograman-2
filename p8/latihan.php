<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="date">Date : </label>
        <input type="date" name="date" value="<?= $_POST['date'] ?? ' ' ?>"></br>
        <label for="firstName">Capital : </label>
        <input type="text" name="firstName" value="<?= $_POST['firstName'] ?? ' ' ?>"></br>
        <label for="lastName">Lower : </label>
        <input type="text" name="lastName" value="<?= $_POST['lastName'] ?? ' ' ?>"></br>
    </br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </br>
    </br>
    <?php
        if(isset($_POST['submit'])) {
            $date = $_POST['date'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];

            echo "Date : " . date($date) . "</br>"; 
            echo "Ini capital : " . strtoupper($firstName) . "</br>"; 
            echo "Ini lower : " . strtolower($lastName) . "</br>"; 
        }
    ?>
</body>
</html>