<?php
    $usr = "";
    $ps = "";
    $eusr = "";
    $eps = "";
    if(isset($_POST["txUser"])){
        $usr = $_POST["txUser"];
        $ps = $_POST["txPassword"];
        if($usr==""){
            $eusr = "<div style='color:red; font-size:10px;'>Field User Masih Kosong</div>";
        }
        if($ps==""){
            $eps = "<div style='color:red; font-size:10px;'>Field Password Masih Kosong</div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method POST</title>
</head>
<body>
    <form action="latihan02.php" method="POST">
        <div>
            Username : <input type="text" name="txUser"><?=$eusr;?>
        </div>
        <div>
            Password : <input type="password" name="txPassword"><?=$eps;?>
        </div>
        <div>
            <button>Login</button>
        </div>
    </form>
    <div>
        Isi dari Form :<br>
            1. Username : <?=$usr?><br>
            2. Password : <?=$ps?>
    </div>
</body>
</html>