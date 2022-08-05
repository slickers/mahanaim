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

$nama_mjl = $_GET['nama_mjl'];
$gender = $_GET['gender'];
$kwp = $_GET['kwp'];
$jabatan_mjl = $_GET['jabatan_mjl'];
$masa_jabatan = $_GET['masa_jabatan'];

// $query = mysqli_query(
//     $koneksi,
//     "INSERT INTO jemaat(no,nama,tp_lahir,tg_lahir,gender,gol_darah,pendidikan,pekerjaan,member_keluarga,posisi_keluarga,status_baptis,status_sidi,status_nikah,kwp,pelka,status_jemaat) 
//     VALUES ('',$nama,$pob,$dob,$gender,$darah,$didik,$kerja,$member,$posisi,$baptis,$sidi,$nikah,$kwp,$pelka,$status)"
// );
// header('Location: ../index.php?page=edit-jemaat');
$sql = "INSERT INTO tbl_majelis (nama_mjl, gender, kwp, jabatan_mjl, masa_jabatan)
VALUES ('$nama_mjl','$gender','$kwp','$jabatan_mjl','$masa_jabatan')";

if (mysqli_query($conn, $sql)) {
  header('Location: ../index.php?page=majelis');
} else {
  header('Location: ../index.php?page=errpage');
}

mysqli_close($conn);
