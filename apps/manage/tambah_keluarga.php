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

$nama_kel = $_GET['nama_kel'];
$kwp = $_GET['kwp'];
$kepala = $_GET['kepala'];
$tglnikah = $_GET['tglnikah'];
$alamat = $_GET['alamat'];
$propinsi = $_GET['propinsi'];
$kodepos = $_GET['kodepos'];
$telepon = $_GET['no_telepon'];
$stat_kel = $_GET['stat_kel'];
$info_kel = $_GET['info_kel'];


// $query = mysqli_query(
//     $koneksi,
//     "INSERT INTO jemaat(no,nama,tp_lahir,tg_lahir,gender,gol_darah,pendidikan,pekerjaan,member_keluarga,posisi_keluarga,status_baptis,status_sidi,status_nikah,kwp,pelka,status_jemaat) 
//     VALUES ('',$nama,$pob,$dob,$gender,$darah,$didik,$kerja,$member,$posisi,$baptis,$sidi,$nikah,$kwp,$pelka,$status)"
// );
// header('Location: ../index.php?page=edit-jemaat');

$sql = "INSERT INTO tbl_keluarga (nama_kel, kwp, kepala, tglnikah, alamat, propinsi, kodepos, telepon, stat_kel, info_kel)
VALUES ('$nama_kel','$kwp','$kepala','$tglnikah','$alamat','$propinsi','$kodepos','$telepon','$stat_kel','$info_kel')";

if (mysqli_query($conn, $sql)) {
  header('Location: ../index.php?page=keluarga');
} else {
  header('Location: ../index.php?page=errpage');
}

mysqli_close($conn);
