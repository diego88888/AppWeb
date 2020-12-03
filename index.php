<?php
  session_start();
  if ( !isset( $_SESSION["COD"] ) || $_SESSION["COD"] == null ) {
    print "<script>window.location='login.php';</script>";	
  }

  incluir ('inc');
?>
<!DOCTYPE html>
<html lang = "es">
  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=de-vice-width, initial-scale=1">
    <meta http-equiv = "x-ua-compatible" content = "ie=edge">

    <!-- Font Awesome Icons -->
    <link rel = "stylesheet" href = "plugins/fontawesome-free/css/all.min.css">
    <!-- Icons for boxes -->
    <link rel = "stylesheet" href = "https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">	
    <!-- Theme style -->
    <link rel = "stylesheet" href = "dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href = "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel = "stylesheet">
    <!-- jQuery -->
    <script src = "plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src = "plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <link rel = "stylesheet" href = "plugins/overlayScrollbars/css/OverlayScrollbars.min.css">	
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- ChartJS -->
    <script src = "plugins/Chart.min.js"></script>	
    <script src = "plugins/Chart.utils.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  </head>
  <body class = "hold-transition sidebar-mini layout-fixed">
    <div class = "wrapper">
      <!-- Navbar -->
      <nav class = "main-header navbar navbar-expand navbar-blue navbar-light">
        <?php navbar();?>	
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class = "main-sidebar sidebar-light-primary elevation-4">
        <!-- Sidebar -->
        <div class = "sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class = "user-panel mt-3 pb-3 mb-3 d-flex">
            <div class = "image">
              <img src = "imagenes/modelo.jpg" class = "img-circle elevation-2" alt = "User Image">
            </div>
            <div class="info">
              <a href="index.php" class = "d-block">Hola <?php echo $_SESSION["NOM"];?></a>
            </div>
          </div>		
          <!-- Sidebar Menu -->
          <?php sidebarmenu();?>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- content-wrapper --> 
        <?php
          if (!isset($_GET['constructor'])) {
            principal();
          }else {
            switch ($_GET['constructor']) {
              case 'alumnado': alumnado();break;
              case 'eso1': eso1();break;
              case 'eso2': eso2();break;
              case 'eso3': eso3();break;
              case 'eso4': eso4();break;
              case 'bac1': bac1();break;
              case 'bac2': bac2();break;
              case 'profesorado': profesorado();break;
              case 'personal': personal();break;
              case 'transporte': transporte();break;
              case 'equipamiento': equipamiento();break;
            }
          }
        ?>
      </div>
      <footer class = "main-footer">
          <!-- CONTENIDO DEL FOOTER -->
      </footer>
      <!-- ./wrapper -->
    </div>
    <!-- Javascript -->	
    <script src = "plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>	
    <script src = "plugins/sparklines/sparkline.js"></script>	
    <!-- AdminLTE App -->
    <script src = "dist/js/adminlte.js"></script>	
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  </body>
</html>
	
<?php
  function incluir($dir, & $results = array()) {
      $files = scandir($dir);

      foreach ($files as $key => $value) {
          $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
          if (!is_dir($path)) {
            include($results[] = $path);
          } else if ($value != "." && $value != "..") {
            incluir($path, $results);
            $results[] = $path;
          }
      }
  }	
?>