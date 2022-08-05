<?php
include('../../conf/config.php');

$id_mjl = $_GET['id_mjl'];

$sql = "DELETE FROM tbl_majelis WHERE id_mjl='$id_mjl'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=majelis');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
