<?php
$koneksi = mysqli_connect('localhost', 'root', 'password', 'cms_db');

if (!$koneksi) {
    die("Koneksi Gagal:" . mysqli_connect_error());
}
