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
              <h3 class="card-title"><b>Database Pendeta</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">
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
                    <th>Status Pendeta</th>
                    <th>Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, "SELECT  *, TIMESTAMPDIFF(YEAR, tglahir, CURDATE()) AS usia FROM tbl_pendeta");
                  while ($pdt = mysqli_fetch_array($query)) {
                    $no++
                  ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $pdt['nama_pdt']; ?></td>
                      <td><?php echo $pdt['tplahir']; ?></td>
                      <td><?php echo $pdt['tglahir']; ?></td>
                      <td><?php echo $pdt['usia']; ?></td>
                      <td><?php echo $pdt['gender']; ?></td>
                      <td><?php echo $pdt['alamat']; ?></td>
                      <td><?php echo $pdt['mobile']; ?></td>
                      <td><?php echo $pdt['pendidikan']; ?></td>
                      <td><?php echo $pdt['jabatan_pdt']; ?></td>
                      <td><?php echo $pdt['masa_jabatan']; ?></td>
                      <td><?php echo $pdt['status_pdt']; ?></td>
                      <td><a onclick="destroy_data(<?php echo $pdt['id_pdt']; ?>)" class="btn btn-sm btn-danger">Hapus</a></td>
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
                  Add Pendeta
                </button></td>
              </p>
            </tr>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php $query_fams = "SELECT * FROM `tbl_pendeta`";
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
          <h4 class="modal-title">Data Pendeta</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="GET" action="manage/tambah_pendeta.php">
          <div class="modal-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama_pdt">Nama</label>
                <input type="text" class="form-control" id="nama_pdt" name="nama_pdt" placeholder="Nama Lengkap">
              </div>

              <div class="form-group col-md-6">
                <label for="tplahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tplahir" name="tplahir" placeholder="Tempat Lahir">
              </div>
              <div class="form-group col-md-6">
                <label for="tglahir">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tglahir" name="tglahir" placeholder="YYYY-MM-DD">
              </div>
              <div class="form-group col-md-6">
                <label for="gender">Jenis Kelamin</label>
                <select class="custom-select" name="gender">
                  <option selected>Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
              </div>
              <div class="form-group col-md-6">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
              </div>
              <div class="form-group col-md-6">
                <label for="pendidikan">Pendidikan</label>
                <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="pendidikan">
              </div>
              <div class="form-group col-md-6">
                <label for="jabatan_pdt">Jabatan Pendeta</label>
                <input type="text" class="form-control" id="jabatan_pdt" name="jabatan_pdt" placeholder="Jabatan Pendeta">
              </div>
              <div class="form-group col-md-6">
                <label for="masa_jabatan">Masa Jabatan</label>
                <input type="text" class="form-control" id="masa_jabatan" name="masa_jabatan" placeholder="Masa Jabatan">
              </div>
              <div class="form-group col-md-6">
                <label for="status_pdt">Status Pendeta</label>
                <input type="text" class="form-control" id="status_pdt" name="status_pdt" placeholder="Status Pendeta">
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
<script>
  function destroy_data(data_id_pdt) {
    Swal.fire({
      title: 'Data akan dihapus?',
      showCancelButton: true,
      confirmButtonText: 'Hapus Data',
      confirmButtonColor: 'red',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = ("manage/destroy_pendeta.php?id_pdt=" + data_id_pdt);
      }
    })
  }
</script>