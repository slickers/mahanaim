<?php
include('../../conf/config.php');

$id_jmt = $_GET['id_jmt'];

$sql = "DELETE FROM tbl_jemaat WHERE id_jmt='$id_jmt'";


if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=jemaat');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
