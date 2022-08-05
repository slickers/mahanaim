<?php
include('../../conf/config.php');

$id_kel = $_GET['id_kel'];
$nama_kel = $_GET['nama_kel'];
$kwp = $_GET['kwp'];
$kepala_kel = $_GET['kepala'];
$tglnikah = $_GET['tglnikah'];
$alamat = $_GET['alamat'];
$propinsi = $_GET['propinsi'];
$kodepos = $_GET['kodepos'];
$telepon = $_GET['telepon'];
$stat_kel = $_GET['stat_kel'];
$info_kel = $_GET['info_kel'];

$sql = "UPDATE tbl_keluarga SET nama_kel='$nama_kel', kwp='$kwp', kepala='$kepala_kel', tglnikah='$tglnikah', alamat='$alamat', propinsi='$propinsi', kodepos='$kodepos', telepon='$telepon', stat_kel='$stat_kel', info_kel='$info_kel' WHERE id_kel='$id_kel'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=keluarga');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
