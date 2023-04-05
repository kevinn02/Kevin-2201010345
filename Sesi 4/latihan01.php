<?php
    $usr = "";
    $ps = "";
    if(isset($_GET["txUser"])){
        $usr = $_GET["txUser"];
        $ps = $_GET["txPassword"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method GET</title>
</head>
<body>
    <form action="latihan01.php" method="GET">
        <div>
            Username : <input type="text" name="txUser" required>
        </div>
        <div>
            Password : <input type="password" name="txPassword">
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