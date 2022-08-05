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

$nama_adm = $_GET['nama_adm'];
$username = $_GET['username'];
$password = $_GET['password'];
$level = $_GET['level'];
$keterangan = $_GET['keterangan'];

// $query = mysqli_query(
//     $koneksi,
//     "INSERT INTO jemaat(no,nama,tp_lahir,tg_lahir,gender,gol_darah,pendidikan,pekerjaan,member_keluarga,posisi_keluarga,status_baptis,status_sidi,status_nikah,kwp,pelka,status_jemaat) 
//     VALUES ('',$nama,$pob,$dob,$gender,$darah,$didik,$kerja,$member,$posisi,$baptis,$sidi,$nikah,$kwp,$pelka,$status)"
// );
// header('Location: ../index.php?page=edit-jemaat');

$sql = "INSERT INTO admindb (nama_adm, username, password, level, keterangan)
VALUES ('$nama_adm','$username','$password','$level', '$keterangan')";

if (mysqli_query($conn, $sql)) {
    header('Location: ../index.php?page=adminpage');
} else {
    // echo $nama;
    // echo $username;
    // echo $password;
    // echo $level;
    // echo $keterangan;

    header('Location: ../index.php?page=errpage');
}

mysqli_close($conn);
