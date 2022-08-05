<!DOCTYPE html>
<html lang="en">
<?php include('public/header.php') ?>;
<?php include('conf/config.php') ?>;


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include('public/loader.php') ?>
    <?php include('public/sidebar.php') ?>
    <?php include('public/navbar.php') ?>

    <?php
    if (isset($_GET['page'])) {
      if ($_GET['page'] == 'dashboard') {
        include('public/dashboard.php');
      } else if ($_GET['page'] == 'jemaat') {
        include('apps/pages/jemaat_view.php');
      } else if ($_GET['page'] == 'keluarga') {
        include('apps/pages/keluarga_view.php');
      } else if ($_GET['page'] == 'pendeta') {
        include('apps/pages/pendeta_view.php');
      } else if ($_GET['page'] == 'majelis') {
        include('apps/pages/majelis_view.php');
      } else if ($_GET['page'] == 'errpage') {
        include('public/errpage.php');
      } else {
        include('public/notfound.php');
      }
    } else {
      include('public/dashboard.php');
    } ?>
    <?php include('public/footer.php') ?>
    <?php include('public/script.php') ?>

    <?php
    if (isset($_GET['page'])) {
      if ($_GET['page'] == 'dashboard') {
      }
    } else {
    } ?>


</body>

</html>