<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name = "viewport" content = "width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel = "stylesheet" href = "plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel = "stylesheet" href = "https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel = "stylesheet" href = "plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel = "stylesheet" href = "dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href = "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel = "stylesheet">
  </head>
  <body class = "hold-transition login-page">
    <div class = "login-box">
      <div class = "card">
        <div class = "card-body login-card-body">
          <p class = "login-box-msg">Inicie sesión</p>
          <form action = "inc/login.php" method = "post">
            <div class = "input-group mb-3">
              <input type = "text" class = "form-control" placeholder = "Usuario" id = "username" name = "username" required>
              <div class = "input-group-append">
                <div class = "input-group-text">
                  <span class = "fa fa-user"></span>
                </div>
              </div>
            </div>
            <div class = "input-group mb-3">
              <input type = "password" class = "form-control" placeholder = "Password" id = "password" name = "password" required>
              <div class = "input-group-append">
                <div class = "input-group-text">
                  <span class = "fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class = "input-group mb-3">
              <input type = "text" class = "form-control" placeholder = "Centro" id = "centro" name = "centro" required>
              <div class = "input-group-append">
                <div class =" input-group-text">
                  <span class = "fa fa-building"></span>
                </div>
              </div>
            </div>
              <div class = "col-4">
                <button type = "submit" class = "btn btn-primary btn-block">Acceder</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src = "../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src = "../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src = "../../dist/js/adminlte.min.js"></script>
  </body>
</html>
