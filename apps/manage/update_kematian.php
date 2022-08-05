<?php
$servername = "localhost";
$username = "root";
$password = "Rahasia123";
$dbname = "cmsdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id_jmt = $_GET['id_jmt'];
$nama = $_GET['nama'];
$tplahir = $_GET['tplahir'];
$tglahir = $_GET['tglahir'];
$gender = $_GET['gender'];
$goldarah = $_GET['goldarah'];
$pendidikan = $_GET['pendidikan'];
$pekerjaan = $_GET['pekerjaan'];
$keluarga = $_GET['keluarga'];
$posisi = $_GET['posisi'];
$stat_baptis = $_GET['stat_baptis'];
$stat_sidi = $_GET['stat_sidi'];
$menikah = $_GET['menikah'];
$kwp = $_GET['kwp'];
$pelka = $_GET['pelka'];
$stat_jmt = $_GET['stat_jmt'];
$stat_meninggal = $_GET['stat_meninggal'];
$tglmeninggal = $_GET['tglmeninggal'];
$info_meninggal = $_GET['info_meninggal'];

// $query = mysqli_query(
//     $koneksi,
//     "INSERT INTO jemaat(no,nama,tp_lahir,tg_lahir,gender,gol_darah,pendidikan,pekerjaan,member_keluarga,posisi_keluarga,status_baptis,status_sidi,status_nikah,kwp,pelka,status_jemaat) 
//     VALUES ('',$nama,$pob,$dob,$gender,$darah,$didik,$kerja,$member,$posisi,$baptis,$sidi,$nikah,$kwp,$pelka,$status)"
// );
// header('Location: ../index.php?page=edit-jemaat');

$sql = "UPDATE tbl_jemaat SET nama='$nama', tplahir='$tplahir', tglahir='$tglahir', gender='$gender', goldarah='$goldarah', pendidikan='$pendidikan', pekerjaan='$pekerjaan', keluarga='$keluarga', posisi='$posisi', stat_baptis='$stat_baptis', stat_sidi='$stat_sidi', menikah='$menikah', kwp='$kwp', pelka='$pelka', stat_jmt='$stat_jmt', stat_meninggal='$stat_meninggal', tglmeninggal='$tglmeninggal', info_meninggal='$info_meninggal' WHERE id_jmt='$id_jmt';
";

if (mysqli_query($conn, $sql)) {
    header('Location: ../index.php?page=jemaat');
} else {
    header('Location: ../index.php?page=errpage');
}

mysqli_close($conn);
