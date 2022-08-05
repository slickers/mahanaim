<?php
include('../../conf/config.php');

$id_kel = $_GET['id_kel'];

$sql = "DELETE FROM tbl_keluarga WHERE id_kel='$id_kel'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=keluarga');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
