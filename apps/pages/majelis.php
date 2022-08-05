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
                    <th>Kelola</th>
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
                      <td><a onclick="destroy_data(<?php echo $mjl['id_mjl']; ?>)" class="btn btn-sm btn-danger">Hapus</a></td>
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
              <p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Add Majelis
                </button></td>
              </p>
            </tr>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php $query_mjls = "SELECT * FROM `tbl_jemaat`";
  $result_mjls = mysqli_query($koneksi, $query_mjls);

  $options = "";

  while ($row_mjls = mysqli_fetch_array($result_mjls)) {
    $options = $options . "<option>$row_mjls[1]</option>";
  }

  ?>

  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Data Majelis</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="GET" action="manage/tambah_majelis.php">
          <div class="modal-body">
            <div class="form-row">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nama_mjl">Nama</label>
                  <select id="nama_mjl" class="form-control" name="nama_mjl">
                    <?php echo $options; ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="gender">Jenis Kelamin</label>
                  <select class="custom-select" name="gender">
                    <option selected>Pria</option>
                    <option value="Wanita">Wanita</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="kwp">Pelayanan Wilayah</label>
                  <select class="custom-select" name="kwp">
                    <option selected>KWP-1</option>
                    <?php include('list/kwp.php') ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="jabatan_mjl">Jabatan Majelis</label>
                  <select class="custom-select" name="jabatan_mjl">
                    <option selected>Penatua</option>
                    <option value="Diaken">Diaken</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="masa_jabatan">Masa Jabatan</label>
                  <input type="text" class="form-control" id="masa_jabatan" name="masa_jabatan" placeholder="Masa Jabatan">
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  function destroy_data(data_id_mjl) {
    Swal.fire({
      title: 'Data akan dihapus?',
      showCancelButton: true,
      confirmButtonText: 'Hapus Data',
      confirmButtonColor: 'red',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = ("manage/destroy_majelis.php?id_mjl=" + data_id_mjl);
      }
    })
  }
</script>