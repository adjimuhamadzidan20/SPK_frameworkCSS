<?php  
  require "config/koneksi_db.php";
  session_start();

  // session
  if (isset($_SESSION['masuk'])) {
    header('Location: index.php');
    exit;
  }

  // memerikas cookie
  if (isset($_COOKIE['ID']) && isset($_COOKIE['Key'])) {
    $id = $_COOKIE['ID'];
    $key = $_COOKIE['Key'];

    // ambil data user berdasarkan id
    $query = mysqli_query($koneksi, "SELECT username FROM data_user WHERE ID = $id");
    $row = mysqli_fetch_assoc($query);

    if ($key === hash('sha256', $row['username'])) {
      $_SESSION['masuk'] = true;
    }
  }

  // proses login ke hal dashboard
  if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM data_user WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_assoc($sql);

    if (mysqli_num_rows($sql) > 0) {
      $_SESSION['masuk'] = true;

      // menampilkan nama username yang login pada sidebar
      $_SESSION['nama'] = $data['username'];

      // checkbox remember me
      if (isset($_POST['remember'])) {
        // set cookie
        setcookie('ID', hash('sha256', $data['ID']), time()+60);
        setcookie('Key', hash('sha256', $data['username']), time()+60);
      }

      header('Location: index.php');
      exit;

    } else {
      echo "<script>
              alert('Username atau password tidak valid');
           </script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPK Pemilihan Framework CSS | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

  <style>
     .btn-primary {
        background-color: #0c2461;
        border-color: #0c2461;
      }

      .btn-primary:hover {
        background-color: green;
        border-color: green;
      } 

      a {
        color: #0c2461;
      }
  </style>

</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="login.php">SPK Framework CSS</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Login Sebagai User / Admin</p>

        <form method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block" name="login"><i class="fas fa-sign-in-alt"></i> Login</button>
            </div>
          </div>
        </form>

        <p class="mb-0 mt-3">
          <a href="register.php" class="text-center">Daftar Pengguna Baru</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
