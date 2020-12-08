<?php
function transporte(){
    $ruta_conexion = "conexiones/".$_SESSION["BBDD"].".php";
    include $ruta_conexion;
    
    $COD = array();
    $NOM = array();
    $PRECI = array();
    $RUTA = array();
    $CAPAC = array();
    $CONDUC = array();
    $DNICON = array();

    $query = "select * from TRANSPORTE";
    $resultado = sqlsrv_query($conexion, $query);

    if($resultado  === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $COD[] = $row['COD'];
        $NOM[] = $row['NOM'];
        $PRECI[] = $row['PRECI'];
        $RUTA[] = $row['RUTA'];
        $CAPAC[] = $row['CAPAC'];
        $CONDUC[] = $row['CONDUC'];
        $DNICON[] = $row['DNICON'];
    }

    sqlsrv_free_stmt($resultado);
?>
<div class = "content-header">
    <div class = "container-fluid">
        <div class = "row mb-2">
            <div class = "col-sm-6">
                <h1 class = "m-0 text-dark">Datos generales del Transporte</h1>
            </div>
            
            <div class = "col-sm-6">
                <ol class = "breadcrumb float-sm-right">
                <li class = "breadcrumb-item">Inicio</li>
                <li class = "breadcrumb-item active">Transporte</li>			
                </ol>
            </div> 
        </div>
    </div>
</div>
<section class = "content">
    <div class = "container-fluid">
        <div class = "row">
          <div class = "col-12">
            <div class = "card">
                <div class = "card-header">
                    <h5 class = "m-0">Transporte.</h5>
                </div>
                <div class = "card-body">
                    <table id = "example1" class = "table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Ruta</th>
                                <th>Capacidad</th>
                                <th>Conductor</th>
                                <th>DNI Conductor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < count($COD); $i++) { ?>
                            <tr>
                                <td><?php echo $COD[$i]; ?></td>
                                <td><?php echo $NOM[$i]; ?></td>
                                <td><?php echo $PRECI[$i]; ?></td>
                                <td><?php echo utf8_encode($RUTA[$i]); ?></td>
                                <td><?php echo $CAPAC[$i]; ?></td>
                                <td><?php echo $CONDUC[$i]; ?></td>
                                <td><?php echo $DNICON[$i]; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
<?php
}
?>
