<?php
session_start();
if (!isset($_SESSION['nama_adm'])) {
    // jika user belum login
    header('Location: ../login');
    exit();
}

include('../../conf/config.php');

$id_pdt = $_GET['id_pdt'];
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
$adm = $_SESSION['nama_adm'];

$sql = "UPDATE tbl_pendeta SET nama_pdt='$nama_pdt', tplahir='$tplahir', tglahir='$tglahir', gender='$gender', alamat='$alamat', mobile='$mobile', pendidikan='$pendidikan', jabatan_pdt='$jabatan_pdt', masa_jabatan='$masa_jabatan', status_pdt='$status_pdt',update_by='$adm',update_time=CURRENT_TIMESTAMP  WHERE id_pdt='$id_pdt'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=pendeta');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
