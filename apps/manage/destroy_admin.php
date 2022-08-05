<?php
include('../../conf/config.php');

$id_adm = $_GET['id_adm'];

$sql = "DELETE FROM admindb WHERE id_adm='$id_adm'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=adminpage');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
