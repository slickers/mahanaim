<?php
include('../../conf/config.php');

$id_kel = $_GET['id_kel'];

// $query = mysqli_query(
//     $koneksi,
//     "INSERT INTO jemaat(no,nama,tp_lahir,tg_lahir,gender,gol_darah,pendidikan,pekerjaan,member_keluarga,posisi_keluarga,status_baptis,status_sidi,status_nikah,kwp,pelka,status_jemaat) 
//     VALUES ('',$nama,$pob,$dob,$gender,$darah,$didik,$kerja,$member,$posisi,$baptis,$sidi,$nikah,$kwp,$pelka,$status)"
// );
// header('Location: ../index.php?page=edit-jemaat');

$sql = "DELETE FROM tbl_keluarga WHERE id_kel='$id_kel'";

if (mysqli_query($koneksi, $sql)) {
    header('Location: ../index.php?page=keluarga');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($koneksi);
