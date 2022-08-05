<?php
$id_jmt = $_GET['id_jmt'];
$query = mysqli_query($koneksi, "SELECT *, tbl_keluarga.kwp FROM tbl_jemaat INNER JOIN tbl_keluarga ON tbl_jemaat.keluarga=tbl_keluarga.nama_kel WHERE id_jmt='$id_jmt' ; ");
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
                    <h3 class="card-title">Catatan Kematian</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method='get' action='manage/update_kematian.php'>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $view['nama']; ?>">
                                    <input type="text" class="form-control" name="id_jmt" value="<?php echo $view['id_jmt']; ?>" hidden>
                                </div>
                            </div>
                            <div class="col-md-6" hidden>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tplahir" value="<?php echo $view['tplahir']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6" hidden>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="tglahir" value="<?php echo $view['tglahir']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6" hidden>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option><?php echo $view['gender']; ?></option>
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" hidden>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <select class="form-control" name="goldarah">
                                        <option><?php echo $view['goldarah']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6" hidden>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <select class="form-control" name="pendidikan">
                                        <option><?php echo $view['pendidikan']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6" hidden>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <select class="form-control" name="pekerjaan">
                                        <option><?php echo $view['pekerjaan']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Anggota Keluarga</label>
                                    <select class="form-control" name="keluarga">
                                        <option><?php echo $view['keluarga']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Posisi dalam Keluarga</label>
                                    <select class="form-control" name="posisi">
                                        <option><?php echo $view['posisi']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6" hidden>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Baptis</label>
                                    <select class="form-control" name="stat_baptis">
                                        <option><?php echo $view['stat_baptis']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6" hidden>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Sidi</label>
                                    <select class="form-control" name="stat_sidi">
                                        <option><?php echo $view['stat_sidi']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6" hidden>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Pernikahan</label>
                                    <select class="form-control" name="menikah">
                                        <option><?php echo $view['menikah']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pelayanan Wilayah</label>
                                    <select class="form-control" name="kwp">
                                        <option><?php echo $view['kwp']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6" hidden>
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pelayanan Kategorial</label>
                                    <select class="form-control" name="pelka">
                                        <option><?php echo $view['pelka']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <!-- select -->
                            <div class="col-md-6" hidden>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Status Jemaat</label>
                                    <input type="text" class="form-control" name="stat_jmt" value="Tidak Aktif">
                                    <input type="text" class="form-control" name="stat_meninggal" value="Meninggal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tanggal Kematian</label>
                                    <input type="text" class="form-control" name="tglmeninggal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Informasi Kematian</label>
                                    <input type="text" class="form-control" name="info_meninggal">
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