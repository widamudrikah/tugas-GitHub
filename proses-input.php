<?php

//jembatan menuju database
include 'koneksi.php';

$id_pasien      = $_POST['id_pasien'];
$nama_pasien    = $_POST['nama_pasien'];
$alamat         = $_POST['alamat'];

//proses simpan data
mysqli_query($koneksi, "INSERT INTO pasien VALUES ('$id_pasien', '$nama_pasien', '$alamat')");

//mengalihkan ke halaman tampil data
header("location:read.php");

?>