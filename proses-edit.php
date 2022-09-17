<?php

include 'koneksi.php';

$id_pasien       =$_POST['id_pasien'];
$nama_pasien     =$_POST['nama_pasien'];
$alamat          =$_POST['alamat'];

$data = mysqli_query($koneksi, "UPDATE pasien SET nama_pasien='$nama_pasien', alamat='$alamat' WHERE id_pasien='$id_pasien'");

header("location:read.php");


?>