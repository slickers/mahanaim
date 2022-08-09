<?php
$koneksi = mysqli_connect('remotemysql.com', 'ipn5W0Uiqc', 'O0lRBL8H7Z', 'cms_db');

if (!$koneksi) {
    die("Koneksi Gagal:" . mysqli_connect_error());
}
