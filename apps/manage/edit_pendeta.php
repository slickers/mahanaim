<?php
$id_pdt = $_GET['id_pdt'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_pendeta WHERE id_pdt = $id_pdt;");
$view = mysqli_fetch_array($query);
?>


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
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Pendeta</h3>
                </div>
                <div class="card-body">
                    <form method='get' action='manage/update_pendeta.php' class='.form-control-border '>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama_pdt" value="<?php echo $view['nama_pdt']; ?>">
                                    <input type="text" class="form-control" name="id_pdt" value="<?php echo $view['id_pdt']; ?>" hidden>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tplahir" value="<?php echo $view['tplahir']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="tglahir" value="<?php echo $view['tglahir']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option><?php echo $view['gender']; ?></option>
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $view['alamat']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control" name="mobile" value="<?php echo $view['mobile']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <input type="text" class="form-control" name="pendidikan" value="<?php echo $view['pendidikan']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan_pdt" value="<?php echo $view['jabatan_pdt']; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Masa Jabatan</label>
                                    <input type="text" class="form-control" name="masa_jabatan" value="<?php echo $view['masa_jabatan']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Pendeta</label>
                                    <select class="form-control" name="status_pdt">
                                        <option><?php echo $view['status_pdt']; ?></option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                        <option value="Partisipan">Emeritus</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
</div>