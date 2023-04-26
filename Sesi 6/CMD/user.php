<?php
    include("Database/koneksi.php");

    function createuser($nama, $email, $username, $password){
        $stt = false;
        $iduser = md5($username);
        $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser) 
        VALUES(
            '$nama', 
            '$email', 
            '$username', 
            '$password', 
            '$iduser'
        );";
        echo "DEBUG: ". $sql;
        return $stt;
    }
?>