<?php
    $mhs = array(
        array("Nama"=>"Adi", "ID"=>"12345", "Kota"=>"Durian Runtuh"),
        array("Nama"=>"Githa", "ID"=>"14545", "Kota"=>"Kajarta"),
        array("Nama"=>"Kusuma", "ID"=>"22345", "Kota"=>"Surabaya"),
        array("Nama"=>"Mayada", "ID"=>"98745", "Kota"=>"Bikini Bottom"),
    );
    // echo $mhs[1]["Nama"];
    // echo "<hr>";
    // print_r($mhs);
    // echo "<hr>";

    // foreach($mhs as $Data){
    //     foreach($Data as $label => $value){
    //         echo $label. " : ". $value. "<br>";
    //     }
    //     echo "<br>";
    // }

    header("Content-type: application/json");
    echo json_encode($mhs);
?>