<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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
              <h3 class="card-title"><b>Database Keluarga</b></h3>
            </div>
            <!-- /.card-header -->
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
                    <th>Status Keluarga</th>
                    <th>Info Keluarga</th>
                    <th>Kelola</th>
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
                      <td><?php echo $kel['tglnikah']; ?></td>
                      <td><?php echo $kel['alamat']; ?></td>
                      <td><?php echo $kel['propinsi']; ?></td>
                      <td><?php echo $kel['kodepos']; ?></td>
                      <td><?php echo $kel['telepon']; ?></td>
                      <td><?php echo $kel['stat_kel']; ?></td>
                      <td><?php echo $kel['info_kel']; ?></td>
                      <td>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kelola
                          </button>
                          <?php if ($_SESSION['level'] == 'admin') {
                            include('menu/admin_kbtn.php');
                          } else {
                            include('menu/operator_kbtn.php');
                          }
                          ?>
                        </div>
                        <!-- <td><a onclick="destroy_data(<?php echo $kel['id_kel']; ?>)" class="btn btn-sm btn-danger">Hapus</a></td> -->
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>

    <!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div style="display: flex; justify-content: flex-end" class="center">
            <tr>
              <p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Add Keluarga</button></td>
              </p>
            </tr>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php

  ?>


  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Data Keluarga</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="GET" action="manage/tambah_keluarga.php">
          <div class="modal-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama_kel">Nama Keluarga</label>
                <input type="text" class="form-control" id="nama_kel" name="nama_kel" placeholder="Nama Keluarga">
              </div>
              <div class="form-group col-md-6">
                <label for="kwp">Pelayanan Wilayah</label>
                <select class="custom-select" name="kwp">
                  <option selected>KWP-1</option>
                  <?php include('list/kwp.php') ?>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="kepala">Kepala Keluarga</label>
                <input type="text" class="form-control" id="kepala" name="kepala" placeholder="Nama Kepala Keluarga">
              </div>
              <div class="form-group col-md-6">
                <label for="tglnikah">Tanggal Pernikahan</label>
                <input type="text" class="form-control" id="tglnikah" name="tglnikah" placeholder="YYYY-MM-DD">
              </div>
              <div class="form-group col-md-12">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap">
              </div>
              <div class="form-group col-md-3">
                <label for="propinsi">Propinsi</label>
                <select class="custom-select" name="propinsi">
                  <option selected>DKI Jakarta</option>
                  <?php include('list/propinsi.php') ?>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="kodepos">Kode Pos</label>
                <input type="text" class="form-control" id="kodepos" name="kodepos" placeholder="Kode Pos">
              </div>
              <div class="form-group col-md-3">
                <label for="telepon">Nomor Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon">
              </div>
              <div class="form-group col-md-3">
                <label for="stat_kel">Status Keluarga</label>
                <select class="custom-select" name="stat_kel">
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
  function destroy_data(data_id_kel) {
    Swal.fire({
      title: 'Hapus Data keluarga?',
      showCancelButton: true,
      confirmButtonText: 'Hapus Data',
      confirmButtonColor: 'red',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = ("manage/destroy_keluarga.php?id_kel=" + data_id_kel);
      }
    })
  }
</script>