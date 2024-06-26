<?php
    function grade(){
        include 'ifElse.php';
    }
    function calculate() {
        include 'switchCase.php';
    }
    function multiply() {
        include 'forLoop.php';
    }
    function arr(){
        include 'array.php';
    }
    function menu($menu) {
        if($menu === '1'){
            return grade();
        } else if($menu === '2'){
            return calculate();
        } else if($menu === '3') {
            return multiply();
        } else if($menu === '4') {
            return arr();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> pertemuan 7</title>
</head>
<body>
    <h3>Materi Pemgrograman PHP</h3>
    <ol>
        <li>Penggunaan IF</li>
        <li>Penggunaan Switch...Case</li>
        <li>Penggunaan Looping</li>
        <li>Penggunaan Array</li>
    </ol>
    <form action="" method="post">
        Pilih Materi : 
        <input type="text" name="menu" width="10"> 
        <input type="submit" value="Pilih" name="choose">
        <input type="submit" value="cancel" name="cancel">
    </form>
    <fieldset>
        <legend>
            <?php 
             session_start();
             
                $menu = isset($_POST['choose']) ? $_POST['menu'] : (isset($_SESSION['menu']) ? $_SESSION['menu'] : null);
                $legend = $menu == '1' ? 'Penggunaan IF' : 
                        ($menu == '2' ? 'Penggunaan Switch...Case' : 
                        ($menu == '3' ? 'Penggunaan Looping' : 
                        ($menu == '4' ? 'Penggunaan Array' : 'Materi')));
                echo $legend;
            ?>
        </legend>
        <?php 
            if (isset($_POST['choose'])) {
                $_SESSION['menu'] = $_POST['menu'];
            }

            if (isset($_POST['cancel'])) {
                session_unset();
            }
            $menu = isset($_POST['choose']) ? $_POST['menu'] : (isset($_SESSION['menu']) ? $_SESSION['menu'] : null);
            menu($menu);
        ?>

    </fieldset>
</body>
</html>