<?php
$servername = "localhost";
$username = "root";
$password = "Rahasia123";
$dbname = "cms_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id_jmt = $_GET['id_jmt'];
$nama = $_GET['nama'];
$pob = $_GET['tplahir'];
$dob = $_GET['tglahir'];
$gender = $_GET['gender'];
$darah = $_GET['goldarah'];
$didik = $_GET['pendidikan'];
$kerja = $_GET['pekerjaan'];
$member = $_GET['keluarga'];
$posisi = $_GET['posisi'];
$tpbaptis = $_GET['tpbaptis'];
$tglbaptis = $_GET['tglbaptis'];
$tpsidi = $_GET['tpsidi'];
$tglsidi = $_GET['tglsidi'];
$nikah = $_GET['menikah'];
$pelka = $_GET['pelka'];
$status = $_GET['stat_jmt'];

// $query = mysqli_query(
//     $koneksi,
//     "INSERT INTO jemaat(no,nama,tp_lahir,tg_lahir,gender,gol_darah,pendidikan,pekerjaan,member_keluarga,posisi_keluarga,status_baptis,status_sidi,status_nikah,kwp,pelka,status_jemaat) 
//     VALUES ('',$nama,$pob,$dob,$gender,$darah,$didik,$kerja,$member,$posisi,$baptis,$sidi,$nikah,$kwp,$pelka,$status)"
// );
// header('Location: ../index.php?page=edit-jemaat');

$sql = "UPDATE tbl_jemaat SET nama='$nama', tplahir='$pob', tglahir='$dob', gender='$gender', goldarah='$darah', pendidikan='$didik', pekerjaan='$kerja', keluarga='$member', posisi='$posisi', tpbaptis='$tpbaptis', tglbaptis='$tglbaptis', tpsidi='$tpsidi', tglsidi='$tglsidi', menikah='$nikah', pelka='$pelka', stat_jmt='$status' WHERE id_jmt='$id_jmt'";

if (mysqli_query($conn, $sql)) {
    header('Location: ../index.php?page=jemaat');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($conn);
