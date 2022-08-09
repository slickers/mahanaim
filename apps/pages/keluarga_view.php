<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Database Keluarga</h1>
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
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Keluarga</th>
                      <th>Kelompok Pelayanan</th>
                      <th>Nama Kepala Keluarga</th>
                      <th>Tanggal Pernikahan</th>
                      <th>Alamat</th>
                      <th>Propinsi</th>
                      <th>Kode Pos</th>
                      <th>Nomor Telepon</th>
                      <th>Jumlah Anggota</th>
                      <th>Status Keluarga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_keluarga");
                    while ($kel = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $kel['nama_kel']; ?></td>
                        <td><?php echo $kel['kwp']; ?></td>
                        <td><?php echo $kel['kepala']; ?></td>
                        <td><?php echo $kel['tglnikah'] ? date("d M Y", strtotime($kel['tglnikah'])) : '' ?></td>
                        <td><?php echo $kel['alamat']; ?></td>
                        <td><?php echo $kel['propinsi']; ?></td>
                        <td><?php echo $kel['kodepos']; ?></td>
                        <td><?php echo $kel['telepon']; ?></td>
                        <td><?php echo $kel['stat_kel']; ?></td>
                        <td><?php echo $kel['info_kel']; ?></td>

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
<!-- /.content -->
</div>
<!-- /.content-wrapper -->