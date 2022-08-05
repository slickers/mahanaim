<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">CMS | Mahanaim</h1>
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
                      <td><?php echo $jmt['tglahir']; ?></td>
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

  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Data Jemaat</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="GET" action="add/tambah_jemaat.php">
          <div class="modal-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
              </div>
              <div class="form-group col-md-6">
                <label for="gender">Jenis Kelamin</label>
                <select class="custom-select" name="gender">
                  <option selected>Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="tplahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tplahir" name="tplahir" placeholder="Tempat Lahir">
              </div>
              <div class="form-group col-md-6">
                <label for="tglahir">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tglahir" name="tglahir" placeholder="YYYY-MM-DD">
              </div>
              <div class="form-group col-md-4">
                <label for="goldarah">Golongan Darah</label>
                <select id="goldarah" class="form-control" name="goldarah">
                  <option selected>A</option>
                  <?php include('list/goldarah.php') ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="pendidikan">Pendidikan</label>
                <select id="pendidikan" class="form-control" name="pendidikan">
                  <option selected>TK</option>
                  <?php include('list/pendidikan.php') ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" class="form-control" name="pekerjaan">
                  <option selected>Karyawan</option>
                  <?php include('list/pekerjaan.php') ?>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="keluarga">Anggota Keluarga</label>
                <select id="keluarga" class="form-control" name="keluarga">
                  <?php echo $options; ?>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="posisi">Posisi dalam Keluarga</label>
                <select class="custom-select" name="posisi">
                  <option selected>Ayah</option>
                  <option value="Ibu">Ibu</option>
                  <option value="Anak">Anak</option>
                  <option value="Orang Tua">Orang Tua</option>
                  <option value="Saudara/Kerabat">Saudara/Kerabat</option>
                  <option value="Bukan Saudara">Bukan saudara</option>
                </select>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="stat_baptis">Status Baptis</label>
                  <select class="custom-select" name="stat_baptis">
                    <option selected>Belum</option>
                    <option value="Sudah">Sudah</option>
                    <option value="Tidak Tahu">Tidak Tahu</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="stat_sidi">Status Sidi</label>
                  <select class="custom-select" name="stat_sidi">
                    <option selected>Belum</option>
                    <option value="Sudah">Sudah</option>
                    <option value="Tidak Tahu">Tidak Tahu</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="menikah">Status Pernikahan</label>
                  <select class="custom-select" name="menikah">
                    <option selected>Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="kwp">Pelayanan Wilayah</label>
                  <select class="custom-select" name="kwp">
                    <option selected>KWP-1</option>
                    <?php include('list/kwp.php') ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="pelka">Pelayanan Kategorial</label>
                  <select class="custom-select" name="pelka">
                    <option selected>Pelka Anak</option>
                    <?php include('list/pelka.php') ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="stat_jmt">Status Jemaat</label>
                  <select class="custom-select" name="stat_jmt">
                    <option selected>Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                    <option value="Partisipan">Partisipan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->