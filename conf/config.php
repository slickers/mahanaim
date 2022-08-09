<?php
$koneksi = mysqli_connect('localhost', 'root', 'password', 'dbname');

if (!$koneksi) {
    die("Koneksi Gagal:" . mysqli_connect_error());
}
