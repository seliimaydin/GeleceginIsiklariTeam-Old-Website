<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Paneli Giriş</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=#><b>Admin Sayfası</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Giriş</p>

      <form action="islem/islem.php" method="post">
        <div class="input-group mb-3">
          <input name="ad" minlength="3 maxlength="25" type="text" class="form-control" placeholder="Kullanıcı Adı" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="far fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="sifre" minlength="8 maxlength="25" type="password" class="form-control" placeholder="Şifre" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </li>


             <a href="../index.php" class="nav-link">
             <i class="fas fa-sign-out-alt"></i>
               <p>

                 <span class="right badge badge-danger"></span>
               </p>
             </a>
           </li>
              </label>
            </div>
          </div>
          <!-- /.col -->
         <div class="col-4">
            <button name="kullanicigiris" type="submit" class="btn btn-primary btn-block btn-flat">Giriş</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p></p>


        </a>


        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#"></a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center"></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
