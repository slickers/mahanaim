<?php
include('../../conf/config.php');

$id_pdt = $_GET['id_pdt'];

$sql = "DELETE FROM tbl_pendeta WHERE id_pdt='$id_pdt'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=pendeta');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
