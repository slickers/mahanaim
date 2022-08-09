<?php
$id_kel = $_GET['id_kel'];
$nama_kel = $_GET['nama_kel'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_keluarga WHERE id_kel='$id_kel'");
$view = mysqli_fetch_array($query);

$result = mysqli_query($koneksi, "SELECT COUNT(*) AS total from tbl_jemaat WHERE keluarga='$nama_kel' AND stat_jmt='Aktif'");
$field_cnt = mysqli_fetch_assoc($result);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kartu Keluarga</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img>
                                <center><?php echo getProfilePicture($view['nama_kel']); ?></center></img>
                            </div>

                            <h1 class="profile-username text-center"><b><?php echo $view['nama_kel']; ?></b></h1>

                            <hr>
                            <ul class="list-group list-group-unbordered mb-2">
                                <center><b>Alamat</b> <a class="text-center"></a></center>
                                <p class="text-center"> <?php echo $view['alamat']; ?>, <?php echo $view['propinsi']; ?>, <?php echo $view['kodepos']; ?></p>
                                <p class="text-center">Telp : <?php echo $view['telepon']; ?></p>

                            </ul>
                            <hr>

                            <ul class="list-group list-group-unbordered mb-2">
                                <center><b>Tanggal Pernikahan</b><a class="text-center"></a></center>
                                <p class="text-center"><?php echo $view['tglnikah'] ? date("d M Y", strtotime($view['tglnikah'])) : '' ?></p>

                            </ul>
                            <ul class="list-group list-group-unbordered mb-2">
                                <center><b>Kelompok Wilayah</b><a class="text-center"></a></center>
                                <p class="text-center"><?php echo $view['kwp']; ?></p>

                            </ul>
                            <ul class="list-group list-group-unbordered mb-2">
                                <center><b>Jumlah Anggota Aktif</b><a class="text-center"></a></center>
                                <p class="text-center"><?php echo $field_cnt['total']; ?></p>

                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Keluarga</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <p class="text-muted">
                                <?php echo $view['info_kel']; ?>
                            </p>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#identitas" data-toggle="tab">Identitas Anggota</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#data-jemaat" data-toggle="tab">Data Kejemaatan</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="identitas">
                                    <div>
                                        <div class="card-body">
                                            <table id="table" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Tempat Lahir</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Usia</th>
                                                        <th>Gender</th>
                                                        <th>Golongan Darah</th>
                                                        <th>Posisi</th>
                                                        <th>Mobile</th>
                                                        <th>Pendidikan</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Status Pernikahan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = mysqli_query($koneksi, "SELECT *, tbl_keluarga.kwp, TIMESTAMPDIFF(YEAR, tbl_jemaat.tglahir, CURDATE()) AS usia FROM tbl_jemaat INNER JOIN tbl_keluarga 
                                                ON tbl_jemaat.keluarga=tbl_keluarga.nama_kel WHERE id_kel='$id_kel' and stat_jmt='Aktif';");
                                                    while ($jmt = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $jmt['nama']; ?></td>
                                                            <td><?php echo $jmt['tplahir']; ?></td>
                                                            <td><?php echo $jmt['tglahir'] ? date("d M Y", strtotime($jmt['tglahir'])) : '' ?></td>
                                                            <td><?php echo $jmt['usia']; ?></td>
                                                            <td><?php echo $jmt['gender']; ?></td>
                                                            <td><?php echo $jmt['goldarah']; ?></td>
                                                            <td><?php echo $jmt['posisi']; ?></td>
                                                            <td><?php echo $jmt['mobile']; ?></td>
                                                            <td><?php echo $jmt['pendidikan']; ?></td>
                                                            <td><?php echo $jmt['pekerjaan']; ?></td>
                                                            <td><?php echo $jmt['menikah']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane active" id="data-jemaat">
                                    <div class="card-body">
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Tempat Baptis</th>
                                                    <th>Tanggal Baptis</th>
                                                    <th>Tempat Sidi</th>
                                                    <th>Tanggal Sidi</th>
                                                    <th>Pelka</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = mysqli_query($koneksi, "SELECT *, tbl_keluarga.kwp, TIMESTAMPDIFF(YEAR, tbl_jemaat.tglahir, CURDATE()) AS usia FROM tbl_jemaat INNER JOIN tbl_keluarga 
                                                ON tbl_jemaat.keluarga=tbl_keluarga.nama_kel WHERE id_kel='$id_kel' and stat_jmt='Aktif';");
                                                while ($jmt = mysqli_fetch_array($query)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $jmt['nama']; ?></td>
                                                        <td><?php echo $jmt['tpbaptis']; ?></td>
                                                        <td><?php echo $jmt['tglbaptis'] ? date("d M Y", strtotime($jmt['tglbaptis'])) : '' ?></td>
                                                        <td><?php echo $jmt['tpsidi']; ?></td>
                                                        <td><?php echo $jmt['tglsidi'] ? date("d M Y", strtotime($jmt['tglsidi'])) : '' ?></td>
                                                        <td><?php echo $jmt['pelka']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<style>
    .profile-pic {
        background: blue;
        color: #eeeeee;
        border-radius: 50%;
        height: 120px;
        width: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 4.4rem;
        -webkit-box-shadow: 0 3px 5px rgb(54 60 241);
        box-shadow: 0 3px 5px rgb(54 60 241);
    }
</style>
<?php
function getProfilePicture($name)
{
    $name_slice = explode(' ', $name);
    $name_slice = array_filter($name_slice);
    $initials = '';
    $initials .= (isset($name_slice[0][0])) ? strtoupper($name_slice[0][0]) : '';
    $initials .= (isset($name_slice[count($name_slice) - 1][0])) ? strtoupper($name_slice[count($name_slice) - 1][0]) : '';
    return '<div class="profile-pic">' . $initials . '</div>';
}
?>