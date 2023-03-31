<?php
    include_once("latihan04.php");
    TentangAplikasi();
    echo "<hr>";
    CetakLabel01("Contoh Text");
    echo "<hr>";
    CetakLabel02();
    echo "<hr>";
    $ank1 = 5;
    $ank2 = 7;
    echo "Hasil penjumlahan $ank1 dengan $ank2 adalah ". jumlahkan($ank1, $ank2);
?>