<?php
$id_jmt = $_GET['id_jmt'];
$query = mysqli_query($koneksi, "SELECT *, tbl_keluarga.alamat, tbl_keluarga.kwp FROM tbl_jemaat INNER JOIN tbl_keluarga ON tbl_jemaat.keluarga=tbl_keluarga.nama_kel WHERE id_jmt = $id_jmt;");
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
    <?php
    $query_fams = "SELECT * FROM `tbl_keluarga`";
    $result_fams = mysqli_query($koneksi, $query_fams);
    $ls_family = "";
    while ($row_fams = mysqli_fetch_array($result_fams)) {
        $ls_family = $ls_family . "<option>$row_fams[1]</option>";
    }
    ?>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Jemaat</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method='get' action='manage/update_jemaat.php' class='.form-control-border '>
                        <div class="row">
                            <div class="col-md-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $view['nama']; ?>">
                                    <input type="text" class="form-control" name="id_jmt" value="<?php echo $view['id_jmt']; ?>" hidden>
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
                                    <input type="text" class="form-control" name="tglahir" value="<?php echo $view['tglahir']; ?>" placeholder="YYYY-mm-dd">
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
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <select class="form-control" name="goldarah">
                                        <option><?php echo $view['goldarah']; ?></option>
                                        <?php include('list/gol_darah.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" class="form-control" name="mobile" value="<?php echo $view['mobile']; ?>" placeholder="081x-xxxx-xxxx">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <select class="form-control" name="pendidikan">
                                        <option><?php echo $view['pendidikan']; ?></option>
                                        <?php include('list/pendidikan.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <select class="form-control" name="pekerjaan">
                                        <option><?php echo $view['pekerjaan']; ?></option>
                                        <?php include('list/pekerjaan.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Anggota Keluarga</label>
                                    <select class="form-control" name="keluarga">
                                        <option><?php echo $view['keluarga']; ?></option>
                                        <option><?php echo $ls_family; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $view['alamat']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Posisi dalam Keluarga</label>
                                    <select class="form-control" name="posisi">
                                        <option><?php echo $view['posisi']; ?></option>
                                        <?php include('list/posisi.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Tempat Baptis</label>
                                    <input type="text" class="form-control" name="tpbaptis" value="<?php echo $view['tpbaptis']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Tanggal Baptis</label>
                                    <input type="text" class="form-control" name="tglbaptis" value="<?php echo $view['tglbaptis']; ?>" placeholder="YYYY-mm-dd">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Tempat Sidi</label>
                                    <input type="text" class="form-control" name="tpsidi" value="<?php echo $view['tpsidi']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Tanggal Sidi</label>
                                    <input type="text" class="form-control" name="tglsidi" value="<?php echo $view['tglsidi']; ?>" placeholder="YYYY-mm-dd">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Pernikahan</label>
                                    <select class="form-control" name="menikah">
                                        <option><?php echo $view['menikah']; ?></option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Janda">Janda</option>
                                        <option value="Duda">Duda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pelayanan Wilayah</label>
                                    <select class="form-control" name="kwp" disabled>
                                        <option><?php echo $view['kwp']; ?></option>
                                        <?php include('list/kwp.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pelayanan Kategorial</label>
                                    <select class="form-control" name="pelka">
                                        <option><?php echo $view['pelka']; ?></option>
                                        <?php include('list/pelka.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Jemaat</label>
                                    <select class="form-control" name="stat_jmt">
                                        <option><?php echo $view['stat_jmt']; ?></option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                        <option value="Partisipan">Partisipan</option>
                                    </select>
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
</div>