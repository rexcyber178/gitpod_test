<?php
$servername = "localhost";
$username = "root";
$password = "";
$nama = "uji_coba";

$kon = mysqli_connect($servername, $username, $password, $nama);

if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>