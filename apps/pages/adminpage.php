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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Administrator Account</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    $query = mysqli_query($koneksi, "SELECT * FROM admindb");
                                    while ($user = mysqli_fetch_array($query)) {
                                        $no++
                                    ?>
                                        <tr>
                                            <td><?php echo $user['nama_adm']; ?></td>
                                            <td><?php echo $user['username']; ?></td>
                                            <td><?php echo $user['keterangan']; ?></td>
                                            <td><a onclick="destroy_data(<?php echo $user['id_adm']; ?>)" class="btn btn-sm btn-danger">Hapus</a></td>
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
                                    Add System User
                                </button></td>
                            </p>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Administrator User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="GET" action="manage/tambah_admin.php">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_adm">Nama</label>
                                <input type="text" class="form-control" id="nama_adm" name="nama_adm" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="level">Level</label>
                                <select class="custom-select" name="level">
                                    <option selected>admin</option>
                                    <option value="operator">operator</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Isi keterangan / level user">
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
    <script>
        function destroy_data(data_id_adm) {
            Swal.fire({
                title: 'Data akan dihapus?',
                showCancelButton: true,
                confirmButtonText: 'Hapus Data',
                confirmButtonColor: 'red',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = ("manage/destroy_admin.php?id_adm=" + data_id_adm);
                }
            })
        }
    </script>