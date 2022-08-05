<?php
$koneksi = mysqli_connect('localhost', 'root', 'Rahasia123', 'cms_db');

if (!$koneksi) {
    die("Koneksi Gagal:" . mysqli_connect_error());
}
