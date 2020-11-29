<?php
// Conexión al SQL Server
$servidor = "localhost\SQLEXPRESS";
$connectionInfo = array( "Database" => "WIRTZ");

//Conectamos
$conexion = sqlsrv_connect($servidor, $connectionInfo);
// Comprobamos que la conexión es correcta
if (!$conexion) { 
    exit("Error al conectar con SQL Server: " . $conexion);
}

/*Ejemplo consulta SQL de varios resultados
$cursos = array();
$sql = "select CURSO from ALUMNADO";
$stmt = sqlsrv_query($conexion, $sql);

if( $stmt  === false) {
    die( print_r( sqlsrv_errors(), true));
}

while( $row = sqlsrv_fetch_array( $stmt ) ) {
    $cursos[] = $row['CURSO'];
}

sqlsrv_free_stmt( $stmt);


for ($i=0; $i < count($cursos); $i++) { 
    echo $cursos[$i];
}*/
?>

