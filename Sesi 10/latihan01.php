<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM :
            <input type="text" name="txNIM" id="NIM">
        </div>
        <div style="margin-top: 5px;">
            Nama :
            <input type="text" name="txNama" id="Nama">
        </div>
        <div style="margin-top: 5px;">
            Jenis Kelamin :
            <input type="radio" name="txJKEL" id="JKEL" value="L">Laki-Laki
            <input type="radio" name="txJKEL" id="JKEL" value="P">Perempuan
        </div>
        <div style="margin-top: 5px;">
            Jurusan :
            <select name="txJURUSAN" id="JURUSAN">
                <option value="TataBoga">Tata Boga</option>
                <option value="TataBusana">Tata Busana</option>
                <option value="TataMesin">Tata Mesin</option>
                <option value="TataElektro">Tata Elektro</option>
                <option value="TataMultimedia">Tata Multimedia</option>
            </select>
        </div>
        <div style="margin-top: 5px;">
            Hobi :
            <input type="checkbox" name="txHOBI_Mancing" value="1">Mancing
            <input type="checkbox" name="txHOBI_Menyanyi" value="2">Menyanyi
            <input type="checkbox" name="txHOBI_Tidur" value="3">Tidur
            <input type="checkbox" name="txHOBI_Manggang" value="4">Manggang
            <input type="checkbox" name="txHOBI_Menari" value="5">Menari
            <input type="checkbox" name="txHOBI_Ngegame" value="6">Ngegame
        </div>
        <div style="margin-top: 5px;">
            <button type="submit">Kirim Data</button>
        </div>
    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            let nim = F.namedItem("txNIM").value;
            let nama = F.namedItem("txNama").value;
            let jeniskelamin = F.namedItem("txJKEL").value;
            let jurusan = F.namedItem("txJURUSAN").value;
            let hobi = [
                F.namedItem("txHOBI_Mancing").checked,
                F.namedItem("txHOBI_Menyanyi").checked,
                F.namedItem("txHOBI_Tidur").checked,
                F.namedItem("txHOBI_Manggang").checked,
                F.namedItem("txHOBI_Menari").checked,
                F.namedItem("txHOBI_Ngegame").checked
            ];
                
            // let hobi1 = F.txHOBI[1].checked;
            // let hobi2 = F.txHOBI[2].checked;
            // let hobi3 = F.txHOBI[3].checked;
            // let hobi4 = F.txHOBI[4].checked;
            // let hobi5 = F.txHOBI[5].checked;
            // let hobi6 = F.txHOBI[6].checked;

            console.log("NIM: " +nim);
            console.log("Nama: " +nama);
            console.log("Jenis Kelamin: " +jeniskelamin);
            console.log("Jurusan: " +jurusan);
            console.log("Hobi: " +hobi);

            return false;
        }
    </script>
</body>
</html>