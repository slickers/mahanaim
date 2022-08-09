<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Database Jemaat</h1>
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
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>G.Darah</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Keluarga</th>
                    <th>Posisi</th>
                    <th>Tempat Baptis</th>
                    <th>Tgl Baptis</th>
                    <th>Tempat Sidi</th>
                    <th>Tgl Sidi</th>
                    <th>Status Pernikahan</th>
                    <th>KWP</th>
                    <th>Pelka</th>
                    <th>Status</th>
                    <th hidden>Fatality</th>
                    <th>Kelola</th>
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
                      <td><?php echo $jmt['gender']; ?></td>
                      <td><?php echo $jmt['goldarah']; ?></td>
                      <td><?php echo $jmt['pendidikan']; ?></td>
                      <td><?php echo $jmt['pekerjaan']; ?></td>
                      <td><?php echo $jmt['keluarga']; ?></td>
                      <td><?php echo $jmt['posisi']; ?></td>
                      <td><?php echo $jmt['tpbaptis']; ?></td>
                      <td><?php echo $jmt['tglbaptis'] ? date("d M Y", strtotime($jmt['tglbaptis'])) : '' ?></td>
                      <td><?php echo $jmt['tpsidi']; ?></td>
                      <td><?php echo $jmt['tglsidi'] ? date("d M Y", strtotime($jmt['tglsidi'])) : '' ?></td>
                      <td><?php echo $jmt['menikah']; ?></td>
                      <td><?php echo $jmt['kwp']; ?></td>
                      <td><?php echo $jmt['pelka']; ?></td>
                      <td><?php echo $jmt['stat_jmt']; ?></td>
                      <td hidden><?php echo $jmt['stat_meninggal']; ?></td>
                      <td>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kelola
                          </button>
                          <?php if ($_SESSION['level'] == 'admin') {
                            include('menu/admin_jbtn.php');
                          } else {
                            include('menu/operator_jbtn.php');
                          }
                          ?>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
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
                <td><input type="text" id="max" name="max" placeholder=" Batas Umur Akhir"></td>&nbsp | &nbsp
                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                    Add Jemaat
                  </button></td>
              </p>
            </tr>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  // $query_fams = "SELECT * FROM `tbl_keluarga`";
  // $result_fams = mysqli_query($koneksi, $query_fams);

  // $ls_family = "";

  // while ($row_fams = mysqli_fetch_array($result_fams)) {
  //   $ls_family = $ls_family . "<option>$row_fams[1]</option>";

  //   $kwp_family = "";
  // }

  // while ($row_fams = mysqli_fetch_array($result_fams)) {
  //   $kwp_family = $kwp_family . "<option>$row_fams[2]</option>";
  // }
  $query = "SELECT * FROM tbl_keluarga";

  $hasil = mysqli_query($koneksi, $query);

  $data_keluarga = array();

  while ($row = mysqli_fetch_assoc($hasil)) {
    $data_keluarga[] = $row;
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
        <form method="GET" action="manage/tambah_jemaat.php">
          <div class="modal-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
              </div>
              <div class="form-group col-md-6">
                <label for="tplahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tplahir" name="tplahir" placeholder="Tempat Lahir">
              </div>
              <div class="form-group col-md-6">
                <label for="tglahir">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tglahir" name="tglahir" placeholder="YYYY-mm-dd">
              </div>
              <div class="form-group col-md-6">
                <label for="gender">Jenis Kelamin</label>
                <select class="custom-select" name="gender">
                  <option selected>Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="goldarah">Golongan Darah</label>
                <select id="goldarah" class="form-control" name="goldarah">
                  <?php include('list/gol_darah.php') ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="pendidikan">Pendidikan</label>
                <select id="pendidikan" class="form-control" name="pendidikan">
                  <?php include('list/pendidikan.php') ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" class="form-control" name="pekerjaan">
                  <?php include('list/pekerjaan.php') ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="tglsidi">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Nomor Handphone">
              </div>
              <div class="form-group col-md-8">
                <label for="keluarga">Anggota Keluarga</label>
                <select id="keluarga" class="form-control" name="keluarga">
                  <?php foreach ($data_keluarga as $keluarga) : ?>
                    <option value="<?php echo $keluarga["nama_kel"] ?>">
                      <?php echo $keluarga["nama_kel"] ?> (<?php echo $keluarga["kwp"] ?>)
                    </option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="posisi">Posisi dalam Keluarga</label>
                <select class="custom-select" name="posisi">
                  <?php include('list/posisi.php') ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="stat_baptis">Status Baptis</label>
                <select class="custom-select" name="stat_baptis">
                  <option value="Belum">Belum</option>
                  <option value="Sudah">Sudah</option>
                  <option value="Tidak Tahu">Tidak Tahu</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="tpbaptis">Tempat Baptis</label>
                <input type="text" class="form-control" id="tpbaptis" name="tpbaptis" placeholder="Tempat Baptis">
              </div>
              <div class="form-group col-md-4">
                <label for="tglbaptis">Tanggal Baptis</label>
                <input type="text" class="form-control" id="tglbaptis" name="tglbaptis" placeholder="YYYY-mm-dd">
              </div>
              <div class="form-group col-md-4">
                <label for="stat_sidi">Status Sidi</label>
                <select class="custom-select" name="stat_sidi">
                  <option value="Belum">Belum</option>
                  <option value="Sudah">Sudah</option>
                  <option value="Tidak Tahu">Tidak Tahu</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="tpsidi">Tempat Sidi</label>
                <input type="text" class="form-control" id="tpsidi" name="tpsidi" placeholder="Tempat Sidi">
              </div>
              <div class="form-group col-md-4">
                <label for="tglsidi">Tanggal Sidi</label>
                <input type="text" class="form-control" id="tglsidi" name="tglsidi" placeholder="YYYY-mm-dd">
              </div>
              <div class="form-group col-md-4">
                <label for="menikah">Status Pernikahan</label>
                <select class="custom-select" name="menikah">
                  <option value="Belum Menikah">Belum Menikah</option>
                  <option value="Menikah">Menikah</option>
                  <option value="Janda">Janda</option>
                  <option value="Duda">Duda</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="pelka">Pelayanan Kategorial</label>
                <select class="custom-select" name="pelka">
                  <?php include('list/pelka.php') ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="stat_jmt">Status Jemaat</label>
                <select class="custom-select" name="stat_jmt">
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                  <option value="Partisipan">Partisipan</option>
                </select>
              </div>
              <div class="form-group col-md-4" hidden>
                <label for="other">Other Info</label>
                <input type="text" class="form-control" id="stat_meninggal" name="stat_meninggal" value="Masih Hidup">
                <input type="text" class="form-control" id="tglmeninggal" name="tglmeninggal" value="">
                <input type="text" class="form-control" id="info_meninggal" name="info_meninggal" value="">
              </div>

              <div class="modal-footer justify-content-between col-md-12">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  function destroy_data(data_id_jmt) {
    Swal.fire({
      title: 'Data akan dihapus?',
      showCancelButton: true,
      confirmButtonText: 'Hapus Data',
      confirmButtonColor: 'red',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = ("manage/destroy_jemaat.php?id_jmt=" + data_id_jmt);
      }
    })
  }
</script>