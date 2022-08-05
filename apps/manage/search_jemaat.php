<?php

$minage = $_GET['minage'];
$maxage = $_GET['maxage'];
// $mindate = Carbon::today()->subyears($max);
// $maxdate = Carbon::today()->subyears($min)->endofday();

$query = mysqli_query($koneksi, "SELECT * FROM jemaat where Between('tg_lahir', [$mindate,$maxdate])");
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
    <?php $query_fams = "SELECT * FROM `keluarga`";
    $result_fams = mysqli_query($koneksi, $query_fams);

    $options = "";

    while ($row_fams = mysqli_fetch_array($result_fams)) {
        $options = $options . "<option>$row_fams[1]</option>";
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
                    <form method='get' action='manage/update_jemaat.php'>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $view['nama']; ?>">
                                    <input type="text" class="form-control" name="no" value="<?php echo $view['no']; ?>" hidden>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tp_lahir" value="<?php echo $view['tp_lahir']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="tg_lahir" value="<?php echo $view['tg_lahir']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
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
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Golongan Darah</label>
                                    <select class="form-control" name="gol_darah">
                                        <option><?php echo $view['gol_darah']; ?></option>
                                        <?php include('list/gol_darah.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <select class="form-control" name="pendidikan">
                                        <option><?php echo $view['pendidikan']; ?></option>
                                        <?php include('list/pendidikan.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <select class="form-control" name="pekerjaan">
                                        <option><?php echo $view['pekerjaan']; ?></option>
                                        <?php include('list/pekerjaan.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Anggota Keluarga</label>
                                    <select class="form-control" name="member_keluarga">
                                        <option><?php echo $view['member_keluarga']; ?></option>
                                        <?php echo $options; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Posisi dalam Keluarga</label>
                                    <select class="form-control" name="posisi_keluarga">
                                        <option><?php echo $view['posisi_keluarga']; ?></option>
                                        <option value="Ayah">Ayah</option>
                                        <option value="Ibu">Ibu</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Orang Tua">Orang Tua</option>
                                        <option value="Saudara/Kerabat">Saudara/Kerabat</option>
                                        <option value="Bukan Saudara">Bukan saudara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Baptis</label>
                                    <select class="form-control" name="status_baptis">
                                        <option><?php echo $view['status_baptis']; ?></option>
                                        <option value="Belum">Belum</option>
                                        <option value="Sudah">Sudah</option>
                                        <option value="Tidak Tahu">Tidak Tahu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Sidi</label>
                                    <select class="form-control" name="status_sidi">
                                        <option><?php echo $view['status_sidi']; ?></option>
                                        <option value="Belum">Belum</option>
                                        <option value="Sudah">Sudah</option>
                                        <option value="Tidak Tahu">Tidak Tahu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Pernikahan</label>
                                    <select class="form-control" name="status_nikah">
                                        <option><?php echo $view['status_nikah']; ?></option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Janda">Janda</option>
                                        <option value="Duda">Duda</option>
                                    </select>
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
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Pelayanan Kategorial</label>
                                    <select class="form-control" name="pelka">
                                        <option><?php echo $view['pelka']; ?></option>
                                        <?php include('list/pelka.php') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Status Jemaat</label>
                                    <select class="form-control" name="status_jemaat">
                                        <option><?php echo $view['status_jemaat']; ?></option>
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