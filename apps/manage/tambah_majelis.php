<?php
include('../../conf/config.php');

$nama_mjl = $_GET['nama_mjl'];
$gender = $_GET['gender'];
$kwp = $_GET['kwp'];
$jabatan_mjl = $_GET['jabatan_mjl'];
$masa_jabatan = $_GET['masa_jabatan'];

$sql = "INSERT INTO tbl_majelis (nama_mjl, gender, kwp, jabatan_mjl, masa_jabatan)
VALUES ('$nama_mjl','$gender','$kwp','$jabatan_mjl','$masa_jabatan')";

if (mysqli_query($koneksi, $sql)) {
  header('Location: ../index.php?page=majelis');
} else {
  header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
