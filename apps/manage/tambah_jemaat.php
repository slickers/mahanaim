<?php
session_start();
if (!isset($_SESSION['nama_adm'])) {
    // jika user belum login
    header('Location: ../login');
    exit();
}

include('../../conf/config.php');

$nama = $_GET['nama'];
$tplahir = $_GET['tplahir'];
$tglahir = htmlspecialchars($_GET['tglahir']);
$gender = $_GET['gender'];
$goldarah = $_GET['goldarah'];
$pendidikan = $_GET['pendidikan'];
$pekerjaan = $_GET['pekerjaan'];
$keluarga = $_GET['keluarga'];
$posisi = $_GET['posisi'];
$stat_baptis = $_GET['stat_baptis'];
$tpbaptis = $_GET['tpbaptis'];
$tglbaptis = $_GET['tglbaptis'];
$stat_sidi = $_GET['stat_sidi'];
$tpsidi = $_GET['tpsidi'];
$tglsidi = $_GET['tglsidi'];
$menikah = $_GET['menikah'];
$pelka = $_GET['pelka'];
$stat_jmt = $_GET['stat_jmt'];
$stat_meninggal = $_GET['stat_meninggal'];
$tglmeninggal = $_GET['tglmeninggal'];
$info_meninggal = $_GET['info_meninggal'];
$mobile = $_GET['mobile'];
$created_by = $_SESSION['nama_adm'];



$sql = "INSERT INTO tbl_jemaat (nama, tplahir, tglahir, gender, goldarah, pendidikan, pekerjaan, keluarga, posisi, stat_baptis, tpbaptis, tglbaptis, stat_sidi, tpsidi, tglsidi, menikah, pelka, stat_jmt, stat_meninggal, tglmeninggal, info_meninggal, mobile,created_by,created_time)
VALUES ('$nama','$tplahir','$tglahir','$gender','$goldarah','$pendidikan','$pekerjaan','$keluarga','$posisi','$stat_baptis','$tglbaptis','$tpbaptis','$stat_sidi','$tpsidi','$tglsidi','$menikah','$pelka','$stat_jmt','$stat_meninggal','$tglmeninggal','$info_meninggal','$mobile','$created_by',CURRENT_TIMESTAMP)";

// if (mysqli_query($koneksi, $sql)) {
//     header('Location: ../index.php?page=jemaat');
// } else {
//     header('Location: ../index.php?page=errpage');
// }

mysqli_close($koneksi);
