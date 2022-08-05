  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
          <img src="dist/img/mahanaim.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">mahanaim|CMS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block"><?php echo $_SESSION['nama_adm'] . ' | ' . $_SESSION['level']; ?></a>
              </div>
          </div>


          <?php if ($_SESSION['level'] == 'admin') {
                include('menu/admin.php');
            } else {
                include('menu/oprator.php');
            }
            ?>

          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>