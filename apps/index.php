<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!$_SESSION['nama_adm']) {
  header('Location: ../index.php?session-expired');
}
include('pages/header.php') ?>;
<?php include('../conf/config.php') ?>;


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include('pages/loader.php') ?>
    <?php include('pages/sidebar.php') ?>
    <?php include('pages/navbar.php') ?>

    <?php
    if (isset($_GET['page'])) {
      if ($_GET['page'] == 'dashboard') {
        include('pages/dashboard.php');
      } else if ($_GET['page'] == 'jemaat') {
        include('pages/jemaat.php');
      } else if ($_GET['page'] == 'keluarga') {
        include('pages/keluarga.php');
      } else if ($_GET['page'] == 'pendeta') {
        include('pages/pendeta.php');
      } else if ($_GET['page'] == 'majelis') {
        include('pages/majelis.php');
      } else if ($_GET['page'] == 'edit_jemaat') {
        include('manage/edit_jemaat.php');
      } else if ($_GET['page'] == 'edit_keluarga') {
        include('manage/edit_keluarga.php');
      } else if ($_GET['page'] == 'edit_pendeta') {
        include('manage/edit_pendeta.php');
      } else if ($_GET['page'] == 'edit_majelis') {
        include('manage/edit_majelis.php');
      } else if ($_GET['page'] == 'edit_kematian') {
        include('manage/edit_kematian.php');
      } else if ($_GET['page'] == 'adminpage') {
        include('pages/adminpage.php');
      } else if ($_GET['page'] == 'edit-list') {
        include('manage/edit-list.php');
      } else if ($_GET['page'] == 'errpage') {
        include('pages/errpage.php');
      } else {
        include('pages/notfound.php');
      }
    } else {
      include('pages/dashboard.php');
    } ?>
    <?php include('pages/footer.php') ?>
    <?php include('pages/script.php') ?>




</body>

</html>