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
              <h3 class="card-title"><b>Database Pendeta</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Usia</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Mobile</th>
                    <th>Pendidikan</th>
                    <th>Jabatan Pendeta</th>
                    <th>Masa Jabatan</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, "SELECT *,
                  CONCAT
                  (
                  FLOOR((TIMESTAMPDIFF(MONTH, tglahir, CURDATE()) / 12)), ' thn ',
                  MOD(TIMESTAMPDIFF(MONTH, tglahir, CURDATE()), 12) , ' bln'
                  ) AS usia
                  FROM tbl_pendeta");
                  while ($pdt = mysqli_fetch_array($query)) {
                    $no++
                  ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $pdt['nama_pdt']; ?></td>
                      <td><?php echo $pdt['tplahir']; ?></td>
                      <td><?php echo $pdt['tglahir'] ? date("d M Y", strtotime($pdt['tglahir'])) : '' ?></td>
                      <td><?php echo $pdt['usia']; ?></td>
                      <td><?php echo $pdt['gender']; ?></td>
                      <td><?php echo $pdt['alamat']; ?></td>
                      <td><?php echo $pdt['mobile']; ?></td>
                      <td><?php echo $pdt['pendidikan']; ?></td>
                      <td><?php echo $pdt['jabatan_pdt']; ?></td>
                      <td><?php echo $pdt['masa_jabatan']; ?></td>
                      <td><?php echo $pdt['status_pdt']; ?></td>
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