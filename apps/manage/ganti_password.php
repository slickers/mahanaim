<?php
include('../../conf/config.php');

$nama_adm = $_GET['nama_adm'];
$password = $_GET['password'];
$sql = "UPDATE admindb SET password='$password' WHERE nama_adm='$nama_adm'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=dashboard');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
