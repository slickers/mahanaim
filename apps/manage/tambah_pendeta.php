<?php
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

$sql = "INSERT INTO tbl_pendeta (nama_pdt, tplahir, tglahir, gender, alamat, mobile, pendidikan, jabatan_pdt, masa_jabatan, status_pdt)
VALUES ('$nama_pdt','$tplahir','$tglahir','$gender','$alamat','$mobile','$pendidikan','$jabatan_pdt','$masa_jabatan','$status_pdt')";

if (mysqli_query($koneksi, $sql)) {
  header('Location: ../index.php?page=pendeta');
} else {
  header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
