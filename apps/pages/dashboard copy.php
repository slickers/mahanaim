<?php include('dashboard_query.php') ?>
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
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 style="font-size:60px;" class='text-center'><?php echo $data1['total_jmt']; ?></h3>
                        </div>
                        <a href="index.php?page=jemaat" class="small-box-footer">Jumlah Jemaat Aktif</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 style="font-size:60px;" class='text-center'><?php echo $data2['total_kel']; ?></h3>
                        </div>
                        <a href="index.php?page=keluarga" class="small-box-footer">Jumlah Keluarga Aktif</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 style="font-size:60px;" class='text-center'><?php echo $data3['total_pdt']; ?></h3>
                        </div>
                        <a href="index.php?page=pendeta" class="small-box-footer">Jumlah Pendeta</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3 style="font-size:60px;" class='text-center'><?php echo $data4['total_mj']; ?></h3>
                        </div>
                        <a href="index.php?page=majelis" class="small-box-footer">Jumlah Majelis</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-indigo">
                        <div class="inner">
                            <h3 style="font-size:60px;" class='text-center'><?php echo $data5['total_pria']; ?></h3>
                        </div>
                        <a href="#" class="small-box-footer">Jumlah Jemaat Pria</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-2 col-6">
                    <!-- small box -->
                    <div class="small-box bg-fuchsia">
                        <div class="inner">
                            <h3 style="font-size:60px;" class='text-center'><?php echo $data6['total_wanita']; ?></h3>
                        </div>
                        <a href="#" class="small-box-footer">Jumlah Jemaat Wanita</a>
                    </div>
                </div>
                <!-- ./col -->

                <section class="col-7">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>HUT Jemaat</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Usia</th>
                                        <th>Gender</th>
                                        <th>Keluarga</th>
                                        <th>KWP</th>
                                        <th>Pelka</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT  *, TIMESTAMPDIFF(YEAR, tglahir, CURDATE()) AS usia1 FROM tbl_jemaat WHERE MONTH(tglahir) = MONTH(CURDATE());");
                                    while ($jmt = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $jmt['nama']; ?></td>
                                            <td><?php echo $jmt['tglahir']; ?></td>
                                            <td><?php echo $jmt['usia1']; ?></td>
                                            <td><?php echo $jmt['gender']; ?></td>
                                            <td><?php echo $jmt['keluarga']; ?></td>
                                            <td><?php echo $jmt['kwp']; ?></td>
                                            <td><?php echo $jmt['pelka']; ?></td>
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
                    <!-- /.col -->
                    <!-- /.row -->
                    <!-- /.container-fluid -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>HUT Pernikahan</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama Keluarga</th>
                                        <th>Tanggal Nikah</th>
                                        <th>KWP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query1 = mysqli_query($koneksi, "SELECT * FROM tbl_keluarga WHERE MONTH(tglnikah) = MONTH(CURDATE());");
                                    while ($kel = mysqli_fetch_array($query1)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $kel['nama_kel']; ?></td>
                                            <td><?php echo $kel['tglnikah']; ?></td>
                                            <td><?php echo $kel['kwp']; ?></td>
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
                    <!-- /.col -->
                    <!-- /.row -->
                    <!-- /.container-fluid -->
                </section>
                <section class="col-5">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                <b>Rasio Jemaat</b>
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div id="chart-container" width="100%">FusionCharts will render here</div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Jemaat Meninggal Tahun Ini</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tgl Lahir</th>
                                        <th>Tgl Meninggal</th>
                                        <th>Usia</th>
                                        <th>Gender</th>
                                        <th>Keluarga</th>
                                        <th>KWP</th>
                                        <th>Info Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT *, TIMESTAMPDIFF(YEAR,tglahir,tglmeninggal) AS usia FROM tbl_jemaat WHERE YEAR(tglmeninggal) = YEAR(CURDATE())  ");
                                    while ($jmt = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $jmt['nama']; ?></td>
                                            <td><?php echo $jmt['tglahir']; ?></td>
                                            <td><?php echo $jmt['tglmeninggal']; ?></td>
                                            <td><?php echo $jmt['usia']; ?></td>
                                            <td><?php echo $jmt['gender']; ?></td>
                                            <td><?php echo $jmt['keluarga']; ?></td>
                                            <td><?php echo $jmt['kwp']; ?></td>
                                            <td><?php echo $jmt['info_meninggal']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                    </div>

                    <!-- /.card-footer-->
            </div>
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <!-- right col -->
</div>
<!-- /.row (main row) -->