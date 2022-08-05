<?php
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

$sql = "INSERT INTO tbl_keluarga (nama_kel, kwp, kepala, tglnikah, alamat, propinsi, kodepos, telepon, stat_kel, info_kel)
VALUES ('$nama_kel','$kwp','$kepala','$tglnikah','$alamat','$propinsi','$kodepos','$telepon','$stat_kel','$info_kel')";

if (mysqli_query($koneksi, $sql)) {
  header('Location: ../index.php?page=keluarga');
} else {
  header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
