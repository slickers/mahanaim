    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">System Database Gereja</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><b>Database Majelis</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Kelompok Pelayanan</th>
                        <th>Jabatan Kemajelisan</th>
                        <th>Masa Jabatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 0;
                      $query = mysqli_query($koneksi, "SELECT * FROM tbl_majelis");
                      while ($mjl = mysqli_fetch_array($query)) {
                        $no++
                      ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $mjl['nama_mjl']; ?></td>
                          <td><?php echo $mjl['gender']; ?></td>
                          <td><?php echo $mjl['kwp']; ?></td>
                          <td><?php echo $mjl['jabatan_mjl']; ?></td>
                          <td><?php echo $mjl['masa_jabatan']; ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->