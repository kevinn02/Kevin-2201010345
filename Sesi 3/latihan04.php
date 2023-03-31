<?php
    // bentuk normal:
    // function namaFungsi(parameter = nilaidefault){
    //     return hasil;
    // }
    function TentangAplikasi(){
        echo "<h3>Tiktok</h3>";
        echo "<sup>versi 1.0</sup>";
    }

    function CetakLabel01($tx){
        echo "Isi Label : ".$tx;  
    }

    function CetakLabel02($tx="Isikan Label"){
        echo "Isi Label : ".$tx;
    }

    function jumlahkan($angka1=0, $angka2=0){
        return $angka1+$angka2;
    }
?>