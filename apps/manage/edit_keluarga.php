<?php
$id_kel = $_GET['id_kel'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_keluarga WHERE id_kel='$id_kel'");
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
                    <h3 class="card-title">Edit Data Keluarga</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method='get' action='manage/update_keluarga.php'>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama Keluarga</label>
                                    <input type="text" class="form-control" name="nama_kel" value="<?php echo $view['nama_kel']; ?>">
                                    <input type="text" class="form-control" name="id_kel" value="<?php echo $view['id_kel']; ?>" hidden>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pelayanan Wilayah</label>
                                    <select class="form-control" name="kwp">
                                        <option><?php echo $view['kwp']; ?></option>
                                        <?php include('list/kwp.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Kepala Keluarga</label>
                                    <input type="text" class="form-control" name="kepala" value="<?php echo $view['kepala']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tanggal Pernikahan</label>
                                    <input type="text" class="form-control" name="tglnikah" value="<?php echo $view['tglnikah']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $view['alamat']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Propinsi</label>
                                    <select class="form-control" name="propinsi">
                                        <option><?php echo $view['propinsi']; ?></option>
                                        <?php include('list/propinsi.php') ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control" name="kodepos" value="<?php echo $view['kodepos']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" class="form-control" name="telepon" value="<?php echo $view['telepon']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Keluarga</label>
                                    <select class="form-control" name="stat_kel">
                                        <option><?php echo $view['stat_kel']; ?></option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                        <option value="Partisipan">Mutasi</option>
                                        <option value="Partisipan">Partisipan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Informasi Tambahan</label>
                                    <input type="text" class="form-control" name="info_kel" value="<?php echo $view['info_kel']; ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>