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

$nama_pdt = $_GET['nama_pdt'];
$tplahir = $_GET['tplahir'];
$tglahir = $_GET['tglahir'];
$gender = $_GET['gender'];
$alamat = $_GET['alamat'];
$mobile = $_GET['mobile'];
$pendidikan = $_GET['pendidikan'];
$jabatan_pdt = $_GET['jabatan_pdt'];
$masa_jabatan = $_GET['masa_jabatan'];
$status_pdt = $_GET['status_pdt'];

// $query = mysqli_query(
//     $koneksi,
//     "INSERT INTO jemaat(no,nama,tp_lahir,tg_lahir,gender,gol_darah,pendidikan,pekerjaan,member_keluarga,posisi_keluarga,status_baptis,status_sidi,status_nikah,kwp,pelka,status_jemaat) 
//     VALUES ('',$nama,$pob,$dob,$gender,$darah,$didik,$kerja,$member,$posisi,$baptis,$sidi,$nikah,$kwp,$pelka,$status)"
// );
// header('Location: ../index.php?page=edit-jemaat');

$sql = "INSERT INTO tbl_pendeta (nama_pdt, tplahir, tglahir, gender, alamat, mobile, pendidikan, jabatan_pdt, masa_jabatan, status_pdt)
VALUES ('$nama_pdt','$tplahir','$tglahir','$gender','$alamat','$mobile','$pendidikan','$jabatan_pdt','$masa_jabatan','$status_pdt')";

if (mysqli_query($conn, $sql)) {
  header('Location: ../index.php?page=pendeta');
} else {
  header('Location: ../index.php?page=errpage');
}

mysqli_close($conn);
