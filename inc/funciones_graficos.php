<?php
function grafico_alumnos(){
    $ruta_conexion = "conexiones/".$_SESSION["BBDD"].".php";
    include $ruta_conexion;

    $total_eso1;
    $total_eso2;
    $total_eso3;
    $total_eso4;
    $total_bac1;
    $total_bac2;

    //TOTAL DE LOS ALUMNOS DE ESO1
    $query = "select COUNT(DNI) AS TOTAL from ALUMNADO where CURSO like 'ESO1%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_eso1 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS ALUMNOS DE ESO2
    $query = "select COUNT(DNI) AS TOTAL from ALUMNADO where CURSO like 'ESO2%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_eso2 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS ALUMNOS DE ESO3
    $query = "select COUNT(DNI) AS TOTAL from ALUMNADO where CURSO like 'ESO3%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_eso3 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS ALUMNOS DE ESO4
    $query = "select COUNT(DNI) AS TOTAL from ALUMNADO where CURSO like 'ESO4%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_eso4 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS ALUMNOS DE BAC1
    $query = "select COUNT(DNI) AS TOTAL from ALUMNADO where CURSO like 'BAC1%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_bac1 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS ALUMNOS DE BAC2
    $query = "select COUNT(DNI) AS TOTAL from ALUMNADO where CURSO like 'BAC2%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_bac2 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    echo $total_eso1.','.$total_eso2.','.$total_eso3.','.$total_eso4.','.$total_bac1.','.$total_bac2;
}

function grafico_profesores(){
    $ruta_conexion = "conexiones/".$_SESSION["BBDD"].".php";
    include $ruta_conexion;

    $total_eso1;
    $total_eso2;
    $total_eso3;
    $total_eso4;
    $total_bac1;
    $total_bac2;

    //TOTAL DE LOS PROFESORES DE ESO1
    $query = "select COUNT(DNI) AS TOTAL from PROFESORADO where CURSO like 'ESO1%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_eso1 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS PROFESORES DE ESO2
    $query = "select COUNT(DNI) AS TOTAL from PROFESORADO where CURSO like 'ESO2%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_eso2 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS PROFESORES DE ESO3
    $query = "select COUNT(DNI) AS TOTAL from PROFESORADO where CURSO like 'ESO3%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_eso3 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS PROFESORES DE ESO4
    $query = "select COUNT(DNI) AS TOTAL from PROFESORADO where CURSO like 'ESO4%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_eso4 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS PROFESORES DE BAC1
    $query = "select COUNT(DNI) AS TOTAL from PROFESORADO where CURSO like 'BAC1%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_bac1 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE LOS PROFESORES DE BAC2
    $query = "select COUNT(DNI) AS TOTAL from PROFESORADO where CURSO like 'BAC2%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $total_bac2 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    echo $total_eso1.','.$total_eso2.','.$total_eso3.','.$total_eso4.','.$total_bac1.','.$total_bac2;
}

function grafico_personal(){
    $ruta_conexion = "conexiones/".$_SESSION["BBDD"].".php";
    include $ruta_conexion;

    $limpieza;
    $conserje;

    //TOTAL DE GENTE TRABAJANDO EN LA LIMPIEZA
    $query = "select COUNT(DNI) AS TOTAL from PERSONAL where LABOR like 'limpieza'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $limpieza = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE GENTE TRABAJANDO EN CONSERJERÍA
    $query = "select COUNT(DNI) AS TOTAL from PERSONAL where LABOR like 'conserje'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $conserje = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);
    echo $limpieza.','.$conserje;
}

function grafico_transporte(){
    $ruta_conexion = "conexiones/".$_SESSION["BBDD"].".php";
    include $ruta_conexion;

    $ruta1;
    $ruta2;

    //TOTAL DE BUSES EN LA RUTA CAMBRE-CORUÑA
    $query = "select COUNT(COD) AS TOTAL from TRANSPORTE where RUTA like 'cambre%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $ruta1 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);

    //TOTAL DE BUSES EN LA RUTA BURGO-CORUÑA
    $query = "select COUNT(COD) AS TOTAL from TRANSPORTE where RUTA like 'burgo%'";
    $resultado = sqlsrv_query($conexion, $query);
    
    if($resultado === false) {
        die( print_r(sqlsrv_errors(), true));
    }

    while($row = sqlsrv_fetch_array($resultado)) {
        $ruta2 = $row['TOTAL'];
    }
          
    sqlsrv_free_stmt($resultado);
    echo $ruta1.','.$ruta2;
}
?>