<?php
function principal() {
?>
<!-- Content Header (Page header) -->
<div class = "content-header">
  <div class = "container-fluid">
    <div class = "row mb-2">
      <div class = "col-sm-6">
        <h1 class = "m-0 text-dark">Inicio</h1>
      </div>
      <!-- /.col -->
      <div class = "col-sm-6">
        <ol class = "breadcrumb float-sm-right">
          <li class = "breadcrumb-item"><a href = "#">Inicio</a></li>
          <li class = "breadcrumb-item active">Principal</li>
        </ol>
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container-fluid --> 
</div>
<!-- /.content-header --> 

<!-- Main content -->
<div class = "content">
  <div class = "container-fluid">
    <div class = "row"> 
      <!-- /.col-md-6 -->
      <div class = "col-lg-12">
        <div class = "card">
          <div class = "card-header">
            <h5 class = "m-0"><?php echo $_SESSION["NOMCEN"] ?></h5>
          </div>
          <div class = "card-body"> 
            <div class = "image">
              <img src = "imagenes/<?php echo $_SESSION["BBDD"] ?>.jpg" alt="Imagen del centro">
            </div>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 --> 
    </div>
    <div class = "row"> 
      <!-- /.col-md-6 -->
      <div class = "col-lg-6">
        <div class = "card card-primary card-outline">
          <div class = "card-header">
            <h5 class = "m-0">Gráfico del alumnado por curso</h5>
          </div>
          <div class="card-body">
            <?php //grafico?>
          </div>
        </div>
      </div>
      <div class = "col-lg-6">
        <div class = "card card-primary card-outline">
          <div class = "card-header">
            <h5 class = "m-0">Gráfico del profesorado por curso</h5>
          </div>
          <div class = "card-body">
            <?php //grafico?>
          </div>
        </div>
      </div>
    </div>
    <div class = "row"> 
      <!-- /.col-md-6 -->
      <div class = "col-lg-6">
        <div class = "card card-primary card-outline">
          <div class = "card-header">
            <h5 class = "m-0">Gráfico de empleados del centro </h5>
          </div>
          <div class = "card-body">
            <?php //grafico?>
          </div>
        </div>
      </div>
      <div class = "col-lg-6">
        <div class = "card card-primary card-outline">
          <div class = "card-header">
            <h5 class = "m-0">Gráfico de transporte </h5>
          </div>
          <div class = "card-body">
            <?php //grafico?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.col-md-6 --> 
  </div>
  <!-- /.row --> 
</div>
<?php
}
?>