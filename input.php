<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>input pasien</h1>

    <form action="proses-input.php" method="post">


        <label for="id_pasien">id pasien</label><br>
        <input type="number" name="id_pasien" id="id_pasien">
        <br>

        <label for="nama_pasien">nama pasien</label><br>
        <input type="text" name="nama_pasien" id="nama_pasien">
        <br>

        <label for="alamat">alamat</label><br>
        <input type="alamat" name="alamat" id="alamat">
        <br>

         <br>
    <button type="submit">simpan</button>


    </form>
</body>
</html>