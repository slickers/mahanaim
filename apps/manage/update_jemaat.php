<?php
session_start();
if (!isset($_SESSION['nama_adm'])) {
    // jika user belum login
    header('Location: ../login');
    exit();
}

include('../../conf/config.php');

$id_jmt = htmlspecialchars($_GET['id_jmt']);
$nama = htmlspecialchars($_GET['nama']);
$pob = htmlspecialchars($_GET['tplahir']);
$dob = htmlspecialchars($_GET['tglahir']);
$gender = htmlspecialchars($_GET['gender']);
$darah = htmlspecialchars($_GET['goldarah']);
$mobile = htmlspecialchars($_GET['mobile']);
$didik = htmlspecialchars($_GET['pendidikan']);
$kerja = htmlspecialchars($_GET['pekerjaan']);
$member = htmlspecialchars($_GET['keluarga']);
$posisi = htmlspecialchars($_GET['posisi']);
$tpbaptis = htmlspecialchars($_GET['tpbaptis']);
$tglbaptis = htmlspecialchars($_GET['tglbaptis']);
$tpsidi = htmlspecialchars($_GET['tpsidi']);
$tglsidi = htmlspecialchars($_GET['tglsidi']);
$nikah = htmlspecialchars($_GET['menikah']);
$pelka = htmlspecialchars($_GET['pelka']);
$status = htmlspecialchars($_GET['stat_jmt']);
$adm = $_SESSION['nama_adm'];

$sql = "UPDATE tbl_jemaat SET nama='$nama', tplahir='$pob', tglahir='$dob', gender='$gender', goldarah='$darah', mobile='$mobile', pendidikan='$didik', pekerjaan='$kerja', keluarga='$member', posisi='$posisi', tpbaptis='$tpbaptis', tglbaptis='$tglbaptis', tpsidi='$tpsidi', tglsidi='$tglsidi', menikah='$nikah', pelka='$pelka', stat_jmt='$status',update_by='$adm',update_time=CURRENT_TIMESTAMP WHERE id_jmt='$id_jmt'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=jemaat');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
