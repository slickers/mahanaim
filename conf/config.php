<?php
$koneksi = mysqli_connect('localhost', 'username-sql', 'password-sql', 'db-sql');

if (!$koneksi) {
    die("Koneksi Gagal:" . mysqli_connect_error());
}
