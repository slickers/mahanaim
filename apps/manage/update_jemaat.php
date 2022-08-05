<?php
include('../../conf/config.php');

$id_jmt = $_GET['id_jmt'];
$nama = $_GET['nama'];
$pob = $_GET['tplahir'];
$dob = $_GET['tglahir'];
$gender = $_GET['gender'];
$darah = $_GET['goldarah'];
$didik = $_GET['pendidikan'];
$kerja = $_GET['pekerjaan'];
$member = $_GET['keluarga'];
$posisi = $_GET['posisi'];
$tpbaptis = $_GET['tpbaptis'];
$tglbaptis = $_GET['tglbaptis'];
$tpsidi = $_GET['tpsidi'];
$tglsidi = $_GET['tglsidi'];
$nikah = $_GET['menikah'];
$pelka = $_GET['pelka'];
$status = $_GET['stat_jmt'];

$sql = "UPDATE tbl_jemaat SET nama='$nama', tplahir='$pob', tglahir='$dob', gender='$gender', goldarah='$darah', pendidikan='$didik', pekerjaan='$kerja', keluarga='$member', posisi='$posisi', tpbaptis='$tpbaptis', tglbaptis='$tglbaptis', tpsidi='$tpsidi', tglsidi='$tglsidi', menikah='$nikah', pelka='$pelka', stat_jmt='$status' WHERE id_jmt='$id_jmt'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=jemaat');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
