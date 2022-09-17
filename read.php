<?php
    include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pasien</title>
</head>
<body>

    <h1>List Pasien</h1>

    <a href="input.php">tambah data</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>id pasien</th>
            <th>nama pasien</th>
            <th>alamat</th>
            <th>opsi</th>
        </tr>
        <?php
            $data = mysqli_query($koneksi, "SELECT * FROM pasien");
            while($pasien = mysqli_fetch_array($data)){
        ?>
                <tr>
                    <td><?php print $pasien['id_pasien'];?></td>
                    <td><?php print $pasien['nama_pasien'];?></td>
                    <td><?php print $pasien['alamat'];?></td>
                    <td>
                        <a href="edit.php?id_pasien=<?php print $pasien['id_pasien'];?>">edit</a>
                        <a href="delete.php?id_pasien=<?php print $pasien['id_pasien'];?>" onclick="return confirm('yakin mau hapus data <?php print $pasien['nama_pasien']; ?> ?')">delete</a>
                    </td>
                </tr>
        <?php
            }
        ?>


    </table>

    
</body>
</html>