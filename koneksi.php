<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "wida";
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){
    echo "gagal terhubung ke server : " . mysqli_connect_error();
}
echo "berhasil terhubung ke server !";

?>