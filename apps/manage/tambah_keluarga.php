<?php
session_start();
if (!isset($_SESSION['nama_adm'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../conf/config.php');

$nama_kel = $_GET['nama_kel'];
$kwp = $_GET['kwp'];
$kepala = $_GET['kepala'];
$tglnikah = $_GET['tglnikah'];
$alamat = $_GET['alamat'];
$propinsi = $_GET['propinsi'];
$kodepos = $_GET['kodepos'];
$telepon = $_GET['no_telepon'];
$stat_kel = $_GET['stat_kel'];
$info_kel = $_GET['info_kel'];
$created_by = $_SESSION['nama_adm'];


$sql = "INSERT INTO tbl_keluarga (nama_kel, kwp, kepala, tglnikah, alamat, propinsi, kodepos, telepon, stat_kel, info_kel,created_by,created_time)
VALUES ('$nama_kel','$kwp','$kepala','$tglnikah','$alamat','$propinsi','$kodepos','$telepon','$stat_kel','$info_kel','$created_by',CURRENT_TIMESTAMP)";

if (mysqli_query($koneksi, $sql)) {
  header('Location: ../index.php?page=keluarga');
} else {
  header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
