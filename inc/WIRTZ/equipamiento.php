<?php
function equipamiento(){
    $ruta_conexion = "conexiones/".$_SESSION["BBDD"].".php";
    include $ruta_conexion;
    
    $COD = array();
    $NOM = array();
    $PRECIO = array();
    $CANTI = array();
    $ANTI = array();
    $AULA = array();

    $total = array();

    $query = "select * from EQUIPAMIENTO";
    $resultado = sqlsrv_query($conexion, $query);

    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $COD[] = $row['COD'];
        $NOM[] = $row['NOM'];
        $PRECIO[] = $row['PRECIO'];
        $CANTI[] = $row['CANTI'];
        $ANTI[] = $row['ANTI'];
        $AULA[] = $row['AULA'];
    }
    
    for ($i=0; $i < count($COD); $i++) { 
        array_push($total, $PRECIO[$i] * $CANTI[$i]);
    }

    sqlsrv_free_stmt($resultado);
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Datos generales del Equipamiento</h1>
            </div>
            
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Inicio</li>
                <li class="breadcrumb-item active">Equipamiento</li>			
                </ol>
            </div> 
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0">Equipamiento.</h5>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio/Unidad</th>
                                <th>Cantidad</th>
                                <th>Precio Total</th>
                                <th>Antiguedad</th>
                                <th>Aula</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < count($COD); $i++) { ?>
                            <tr>
                                <td><?php echo $COD[$i]; ?></td>
                                <td><?php echo $NOM[$i]; ?></td>
                                <td><?php echo $PRECIO[$i].'€'; ?></td>
                                <td><?php echo $CANTI[$i]; ?></td>
                                <td><?php echo $total[$i].'€'; ?></td>
                                <td><?php echo $ANTI[$i]; ?></td>
                                <td><?php echo $AULA[$i]; ?></td>
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
