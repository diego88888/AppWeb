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

/*Ejemplo consulta SQL de sacar el resutado de un COUNT
$cursos;
$sql = "select COUNT(DNI) AS TOTAL from ALUMNADO where CURSO like 'ESO3%'";
$stmt = sqlsrv_query($conexion, $sql);

if( $stmt  === false) {
    die( print_r( sqlsrv_errors(), true));
}

while( $row = sqlsrv_fetch_array( $stmt ) ) {
    $cursos = $row['TOTAL'];
}

sqlsrv_free_stmt( $stmt);
echo $cursos;
*/
?>

