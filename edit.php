<?php

include 'koneksi.php';

$id_pasien = $_GET['id_pasien'];


$data = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
while($pasien = mysqli_fetch_array($data)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data pasien</title>
</head>
<body>
    
    <form action="proses-edit.php" method="post">

        <input type="hidden" name="id_pasien" value="<?php print $pasien['id_pasien']; ?>">

        <label for="nama_pasien">nama pasien</label><br>
        <input type="text" name="nama_pasien" value="<?php print $pasien['nama_pasien']; ?>">
        <br>

        <br>
        <label for="alamat">alamat</label><br>
        <input type="text" name="alamat" value="<?php print $pasien['alamat']; ?>">
        <br>

        <br>
        <button type="submit">simpan perubahan</button>
    </form>
    <?php
    }
    ?>

</body>
</html>