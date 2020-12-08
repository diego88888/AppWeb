<?php
  session_start();
  if (!isset($_SESSION["COD"]) || $_SESSION["COD"] == null) {
    print "<script>window.location = 'login.php';</script>";	
  }
  
  if(isset($_SESSION["BBDD"])){
    incluir('inc/'.$_SESSION["BBDD"].'');
  }else{
    print "<script>window.location = 'login.php';</script>";
  }

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
    <link rel = "stylesheet" href = "plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel = "stylesheet" href = "plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
            <div class = "info">
              <a href = "index.php" class = "d-block">Hola <?php echo $_SESSION["NOM"];?></a>
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
              //ESO1
              case 'eso1a': eso1a();break;
              case 'eso1p': eso1p();break;
              //ESO2
              case 'eso2a': eso2a();break;
              case 'eso2p': eso2p();break;
              //ESO3
              case 'eso3a': eso3a();break;
              case 'eso3p': eso3p();break;
              //ESO4
              case 'eso4a': eso4a();break;
              case 'eso4p': eso4p();break;
              //BAC1
              case 'bac1a': bac1a();break;
              case 'bac1p': bac1p();break;
              //BAC2
              case 'bac2a': bac2a();break;
              case 'bac2p': bac2p();break;
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
    <script src = "plugins/datatables/jquery.dataTables.min.js"></script>
    <script src = "plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src = "plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src = "plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- ChartJS -->
    <script src = "plugins/chart.js/Chart.min.js"></script>
    <script>
      var donutChartCanvas = $('#graficoAlumnos').get(0).getContext('2d')
      var donutData = {
        labels: [
          '1ºESO', 
          '2ºESO',
          '3ºESO', 
          '4ºESO', 
          '1ºBAC', 
          '2ºBAC', 
        ],
        datasets: [
          {
            data: [<?php grafico_alumnos(); ?>],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
          }
        ]
      }
      var donutOptions = {
        maintainAspectRatio : false,
        responsive : true,
      }
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions      
      })
    </script>
    <script>
      var donutChartCanvas = $('#graficoProfesores').get(0).getContext('2d')
      var donutData = {
        labels: [
          '1ºESO', 
          '2ºESO',
          '3ºESO', 
          '4ºESO', 
          '1ºBAC', 
          '2ºBAC', 
        ],
        datasets: [
          {
            data: [<?php grafico_profesores(); ?>],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
          }
        ]
      }
      var donutOptions = {
        maintainAspectRatio : false,
        responsive : true,
      }
      var donutChart = new Chart(donutChartCanvas, {
        type: 'pie',
        data: donutData,
        options: donutOptions      
      })
    </script>
    <script>
      var donutChartCanvas = $('#graficoPersonal').get(0).getContext('2d')
      var donutData = {
        labels: [
          'Limpieza', 
          'Conserjería', 
        ],
        datasets: [
          {
            data: [<?php grafico_personal(); ?>],
            backgroundColor : ['#f56954', '#00a65a'],
          }
        ]
      }
      var donutOptions = {
        maintainAspectRatio : false,
        responsive : true,
      }
      var donutChart = new Chart(donutChartCanvas, {
        type: 'pie',
        data: donutData,
        options: donutOptions      
      })
    </script>
    <script>
      var donutChartCanvas = $('#graficoTransporte').get(0).getContext('2d')
      var donutData = {
        labels: [
          'Cambre-Coruña', 
          'Burgo-Coruña', 
        ],
        datasets: [
          {
            data: [<?php grafico_transporte(); ?>],
            backgroundColor : ['#3c8dbc', '#f39c12'],
          }
        ]
      }
      var donutOptions = {
        maintainAspectRatio : false,
        responsive : true,
      }
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions      
      })
    </script>
  </body>
</html>
	
<?php
  function incluir($dir, & $results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
      $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
      if (!is_dir($path)) {
        include($results[] = $path);
      }else if ($value != "." && $value != "..") {
        incluir($path, $results);
        $results[] = $path;
      }
    }
  }	
?>