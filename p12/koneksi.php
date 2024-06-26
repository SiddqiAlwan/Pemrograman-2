<?php
    $servername = "localhost";
    $dbname = "dbBerita";
    
    $conn =  mysqli_connect($servername, "root", "", $dbname);

    if(!$conn){
        die("Koneksi failed! : " . mysqli_connect_error());
    }
?>
