<?php
session_start();
if (!isset($_SESSION['nama_adm'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../conf/config.php');

$nama_pdt = $_GET['nama_pdt'];
$tplahir = $_GET['tplahir'];
$tglahir = $_GET['tglahir'];
$gender = $_GET['gender'];
$alamat = $_GET['alamat'];
$mobile = $_GET['mobile'];
$pendidikan = $_GET['pendidikan'];
$jabatan_pdt = $_GET['jabatan_pdt'];
$masa_jabatan = $_GET['masa_jabatan'];
$status_pdt = $_GET['status_pdt'];
$created_by = $_SESSION['nama_adm'];


$sql = "INSERT INTO tbl_pendeta (nama_pdt, tplahir, tglahir, gender, alamat, mobile, pendidikan, jabatan_pdt, masa_jabatan, status_pdt,created_by,created_time)
VALUES ('$nama_pdt','$tplahir','$tglahir','$gender','$alamat','$mobile','$pendidikan','$jabatan_pdt','$masa_jabatan','$status_pdt','$created_by',CURRENT_TIMESTAMP)";

if (mysqli_query($koneksi, $sql)) {
  header('Location: ../index.php?page=pendeta');
} else {
  header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
