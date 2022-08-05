<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Church Management System | Mahanaim</title>
  <link rel="icon" type="image/x-icon" href="apps/dist/img/mahanaim.png">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="apps/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="apps/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="apps/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="apps/dist/css/zero.css">
  <link rel="stylesheet" href="apps/dist/css/adminlte.min.css">
  <div class="overlay"></div>
</head>

<body class="hold-transition login-page">

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>GMIST</b>Mahanaim</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Login to start your session</p>

        <form action="conf/authenticate.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name='password'>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  <!-- Zero.js -->
  <script src="apps/dist/js/zero.js"></script>
  <!-- jQuery -->
  <script src="apps/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="apps/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="apps/dist/js/adminlte.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="apps/plugins/sweetalert2/sweetalert2.min.js"></script>


</body>
<?php
$wrong = isset($_GET['error']);
if ($wrong == 1) {
  echo "
  <script>var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
  });Toast.fire({
    icon: 'error',
    title: 'Harap check account anda.'
  })
  </script>";
} else {
  echo '';
}
?> ?>

</html>