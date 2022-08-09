<?php
session_start();
if (!isset($_SESSION['nama_adm'])) {
    // jika user belum login
    header('Location: ../login');
    exit();
}

include('../../conf/config.php');

$id_kel = htmlspecialchars($_GET['id_kel']);
$nama_kel = htmlspecialchars($_GET['nama_kel']);
$kwp = htmlspecialchars($_GET['kwp']);
$kepala_kel = htmlspecialchars($_GET['kepala']);
$tglnikah = htmlspecialchars($_GET['tglnikah']);
$alamat = htmlspecialchars($_GET['alamat']);
$propinsi = htmlspecialchars($_GET['propinsi']);
$kodepos = htmlspecialchars($_GET['kodepos']);
$telepon = htmlspecialchars($_GET['telepon']);
$stat_kel = htmlspecialchars($_GET['stat_kel']);
$info_kel = htmlspecialchars($_GET['info_kel']);
$adm = $_SESSION['nama_adm'];



$sql = "UPDATE tbl_keluarga SET nama_kel='$nama_kel', kwp='$kwp', kepala='$kepala_kel', tglnikah='$tglnikah', alamat='$alamat', propinsi='$propinsi', kodepos='$kodepos', telepon='$telepon', stat_kel='$stat_kel', info_kel='$info_kel',update_by='$adm',update_time=CURRENT_TIMESTAMP WHERE id_kel='$id_kel'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=keluarga');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
