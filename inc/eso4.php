<?php
function eso4(){
    $ruta_conexion = "conexiones/".$_SESSION["BBDD"].".php";
    include $ruta_conexion;
    
    $DNI = array();
    $NOM = array();
    $APELL = array();
    $FECNAC = array();
    $TARSAN = array();
    $TELEF = array();
    $EMAIL = array();
    $NACIO = array();
    $LUGNAC = array();
    $PROVNAC = array();
    $PAISNAC = array();
    $PADRE = array();
    $TLFPA = array();
    $MADRE = array();
    $TLFMA = array();
    $DIRECC = array();
    $CP = array();
    $CURSO = array();

    $nombre_completo = array();
    $curso = array();
    $nivel;
    $grado;
    $clase;

    $query = "select * from ALUMNADO where CURSO like 'ESO4%'";
    $resultado = sqlsrv_query($conexion, $query);

    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $DNI[] = $row['DNI'];
        $NOM[] = $row['NOM'];
        $APELL[] = $row['APELL'];
        $FECNAC[] = $row['FECNAC'];
        $TARSAN[] = $row['TARSAN'];
        $TELEF[] = $row['TELEF'];
        $EMAIL[] = $row['EMAIL'];
        $NACIO[] = $row['NACIO'];
        $LUGNAC[] = $row['LUGNAC'];
        $PROVNAC[] = $row['PROVNAC'];
        $PAISNAC[] = $row['PAISNAC'];
        $PADRE[] = $row['PADRE'];
        $TLFPA[] = $row['TLFPA'];
        $MADRE[] = $row['MADRE'];
        $TLFMA[] = $row['TLFMA'];
        $DIRECC[] = $row['DIRECC'];
        $CP[] = $row['CP'];
        $CURSO[] = $row['CURSO'];
    }

    sqlsrv_free_stmt($resultado);

    for ($i=0; $i < count($NOM); $i++) { 
        array_push($nombre_completo, $APELL[$i].' '.$NOM[$i]);
        $clase = substr($CURSO[$i], -1);
        $nivel = substr($CURSO[$i], 3, 1);
        $grado = substr($CURSO[$i], 0, 3);
        array_push($curso, $nivel.'º '.$grado.' '.$clase);
    }
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Datos generales de 4ºESO</h1>
            </div>
            
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Inicio</li>
                <li class="breadcrumb-item active">4ºESO</li>			
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
                    <h4 class="m-0">Datos 4ºESO.</h4><br><br>
                    <h5 class="m-0">Alumnos.</h5>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Fecha nacimiento</th>
                                <th>Tarjeta sanitaria</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Nacionalidad</th>
                                <th>Lugar nacimiento</th>
                                <th>Provincia nacimiento</th>
                                <th>País nacimiento</th>
                                <th>Padre</th>
                                <th>Teléfono padre</th>
                                <th>Madre</th>
                                <th>Teléfono madre</th>
                                <th>Direccion</th>
                                <th>Código postal</th>
                                <th>Curso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < count($DNI); $i++) { ?>
                            <tr>
                                <td><?php echo $DNI[$i]; ?></td>
                                <td><?php echo $nombre_completo[$i]; ?></td>
                                <td><?php echo $FECNAC[$i]; ?></td>
                                <td><?php echo $TARSAN[$i]; ?></td>
                                <td><?php echo $TELEF[$i]; ?></td>
                                <td><?php echo $EMAIL[$i]; ?></td>
                                <td><?php echo utf8_encode($NACIO[$i]); ?></td>
                                <td><?php echo $LUGNAC[$i]; ?></td>
                                <td><?php echo utf8_encode($PROVNAC[$i]); ?></td>
                                <td><?php echo utf8_encode($PAISNAC[$i]); ?></td>
                                <td><?php echo $PADRE[$i]; ?></td>
                                <td><?php echo $TLFPA[$i]; ?></td>
                                <td><?php echo $MADRE[$i]; ?></td>
                                <td><?php echo $TLFMA[$i]; ?></td>
                                <td><?php echo $DIRECC[$i]; ?></td>
                                <td><?php echo $CP[$i]; ?></td>
                                <td><?php echo $curso[$i]; ?></td>
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
