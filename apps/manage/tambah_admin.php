<?php
session_start();
if (!isset($_SESSION['nama_adm'])) {
    // jika user belum login
    header('Location: ../login');
    exit();
}

include('../../conf/config.php');

$nama_adm = $_GET['nama_adm'];
$username = $_GET['username'];
$password = $_GET['password'];
$level = $_GET['level'];
$keterangan = $_GET['keterangan'];

$sql = "INSERT INTO admindb (nama_adm, username, password, level, keterangan)
VALUES ('$nama_adm','$username','$password','$level', '$keterangan')";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=adminpage');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
