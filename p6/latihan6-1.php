<?php 
    $segitiga = array(
        array("alas" => 4, "tinggi" => 4),
        array("alas" => 5, "tinggi" => 6),
        array("alas" => 7, "tinggi" => 8),
        array("alas" => 9, "tinggi" => 10),
        array("alas" => 11, "tinggi" => 12),
    );

    foreach($segitiga as $sgt) {
        $luas = 0.5 * $sgt['alas'] * $sgt['tinggi'];
        echo "Alas : " . $sgt['alas'] . "\n";
        echo "Tinggi : " . $sgt['tinggi'] . "\n";
        echo "Luas : " . $luas;
        echo "\n------------------------------\n";
    }
?>
