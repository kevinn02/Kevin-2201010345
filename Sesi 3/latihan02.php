<?php
    $age = array("Peter"=>"35", "Bem"=>"37", "Joe"=>"43", "Kevin"=>"20");
    echo "Umur dari Kevin ".$age["Kevin"]. " Tahun<br>";
    echo "<hr>";
    foreach($age as $user => $umur){
        echo "Umur dari ". $user. " : ". $umur. " Tahun";
        echo "<br>";
    }
?>