<?php
$koneksi = mysqli_connect("localhost", "root", "", "nama_database");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
