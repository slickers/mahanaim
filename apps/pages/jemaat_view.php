<div class="content-wrapper">
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
              <h3 class="card-title"><b>Database Jemaat</b></h3>
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
                    <th>Alamat</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Gol Darah</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Anggota Keluarga</th>
                    <th>Posisi di Keluarga</th>
                    <th>Status Baptis</th>
                    <th>Status Sidi</th>
                    <th>Status Pernikahan</th>
                    <th>KWP</th>
                    <th>Pelka</th>
                    <th>Status Jemaat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, "SELECT *, tbl_keluarga.alamat, tbl_keluarga.kwp, TIMESTAMPDIFF(YEAR, tbl_jemaat.tglahir, CURDATE()) AS usia FROM tbl_jemaat INNER JOIN tbl_keluarga ON tbl_jemaat.keluarga=tbl_keluarga.nama_kel;");
                  while ($jmt = mysqli_fetch_array($query)) {
                    $no++
                  ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $jmt['nama']; ?></td>
                      <td><?php echo $jmt['tplahir']; ?></td>
                      <td><?php echo $jmt['tglahir'] ? date("d M Y", strtotime($jmt['tglahir'])) : '' ?></td>
                      <td><?php echo $jmt['usia']; ?></td>
                      <td><?php echo $jmt['alamat']; ?></td>
                      <td><?php echo $jmt['mobile']; ?></td>
                      <td><?php echo $jmt['gender']; ?></td>
                      <td><?php echo $jmt['goldarah']; ?></td>
                      <td><?php echo $jmt['pendidikan']; ?></td>
                      <td><?php echo $jmt['pekerjaan']; ?></td>
                      <td><?php echo $jmt['keluarga']; ?></td>
                      <td><?php echo $jmt['posisi']; ?></td>
                      <td><?php echo $jmt['stat_baptis']; ?></td>
                      <td><?php echo $jmt['stat_sidi']; ?></td>
                      <td><?php echo $jmt['menikah']; ?></td>
                      <td><?php echo $jmt['kwp']; ?></td>
                      <td><?php echo $jmt['pelka']; ?></td>
                      <td><?php echo $jmt['stat_jmt']; ?></td>
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
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div style="display: flex; justify-content: flex-end" class="center">
            <tr>
              <p>
                <td><b><i>Cari Jemaat Berdasar Usia</i></b></td>&nbsp&nbsp:&nbsp&nbsp
                <td><input type="text" id="min" name="min" placeholder=" Batas Umur Awal"></td>&nbsp - &nbsp
                <td><input type="text" id="max" name="max" placeholder=" Batas Umur Akhir"></td>
              </p>
            </tr>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $query_fams = "SELECT * FROM `tbl_keluarga`";
  $result_fams = mysqli_query($koneksi, $query_fams);

  $options = "";

  while ($row_fams = mysqli_fetch_array($result_fams)) {
    $options = $options . "<option>$row_fams[1]</option>";
  }

  ?>