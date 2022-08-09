    <!-- Navbar -->
    <style>
        .jam-digital-malasngoding {
            overflow: hidden;
            width: 150px;
            margin: 10px auto;
            border: 0px solid #efefef;
        }

        .kotak {
            float: right;
            width: 30px;
            height: 25px;
            background-color: #505050;
        }

        .jam-digital-malasngoding p {
            color: #fff;
            font-size: 18px;
            text-align: center;
            margin-top: 0;
        }

        .pembatas {
            float: right;
            width: 3px;
            height: 6px;
            background-color: #ffffff;
        }

        .btnpassword {
            width: 120px;
            height: 25px;
            margin: 10px auto;
            border: none;
            color: white;
            background-color: #ff0000;
        }
    </style>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->

        <ul class="navbar-nav ml-auto">
            <div class="jam-digital-malasngoding">
                <div class="kotak">
                    <p id="detik"></p>
                </div>
                <div class="pembatas"></div>
                <div class="kotak">
                    <p id="menit"></p>
                </div>
                <div class="pembatas"></div>
                <div class="kotak">
                    <p id="jam"></p>
                </div>
            </div>
            <div class="pembatas"></div>
            <div class="pembatas"></div>
            <div class="pembatas"></div>
            <div class="pembatas"></div>
            <div class="pembatas"></div>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btnpassword dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin Tools
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" type="button" class="btnpasssword btn-warning" data-toggle="modal" data-target="#edit-password">Ganti Password</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </ul>
    </nav>
    <div class="modal fade" id="edit-password">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hallo <?php echo $_SESSION['nama_adm'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="GET" action="manage/ganti_password.php">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                <input type="text" class="form-control" id="nama_adm" name="nama_adm" value="<?php echo $_SESSION['nama_adm'] ?>" hidden>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm_password">Retype Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="password">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="return Validate()" />Save changes</button>
                        </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>
    <script type="text/javascript">
        function Validate() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>