<?php
session_start();
include('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM admindb WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query) == 1) {
    header('Location: ../apps');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama_adm'] = $user['nama_adm'];
    $_SESSION['id_adm'] = $user['id_adm'];
    $_SESSION['level'] = $user['level'];
} else {
    header('Location: ../login.php?error=1');
}
