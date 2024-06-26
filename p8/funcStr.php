<?php 
    $cobaStr = 'apa kabar';
    echo "Jumlah string : " . strlen($cobaStr) . "</br>";
    echo "Ini uppercase : " . strtoupper($cobaStr) . "</br>";
    echo "Ini lowercase : " . strtolower($cobaStr) . "</br>";
    echo "Ini huruf awal capital : " . ucfirst($cobaStr) . "</br>";
    echo "Ini ini huruf setiap kata capital : " . ucwords($cobaStr) . "</br>";
    
    $hapusStr = "    Hello world    ";
    echo "Ini hapus space di kiri string : " . ltrim($hapusStr) . "</br>";
    echo "Ini hapus space di kanan string : " . rtrim($hapusStr) . "</br>";
    echo "Ini hapus space di kiri kanan string : " . trim($hapusStr) . "</br>";

    $potongstr = "Hello world";
    echo "Ini hapus string awal berdasarkan jumlah : " . substr($potongstr, 5) . "</br>";

    $menghitungstr = "this is nice today";
    echo "Ini menghitung string" . strlen($menghitungstr) . "</br>"; 
    echo "Ini menghitung string" . substr_count($menghitungstr, "nice", 1   ) . "</br>"; 
    echo "Ini menghitung string" . substr_count($menghitungstr, "is", 2) . "</br>"; 
    echo "Ini menghitung string" . substr_count($menghitungstr, "is", 3) . "</br>"; 
    
    echo "Date : " . date("D-M-Y");
?>