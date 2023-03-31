<?php
    $cars = array("Volvol", "BMW", "Toyota", "Honda");

    $jmlData = count($cars);
    echo "Jumlah Data : ". $jmlData. "<br>";
    for($i=0;$i<4;$i++){
        echo "<br>Kendaraan ". $cars[$i];
    }
    echo "<hr>"; 
    echo "<ol class=\"mobil\">";
    foreach($cars as $Data){
        echo "<li> Kendaraan ". $Data . "</li>";
    }
    echo "</ol>";
?>