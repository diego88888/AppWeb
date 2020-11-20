<?php
// y esta es la conexión al SQL Server
$servidor="localhost\SQLEXPRESS";
$connectionInfo = array( "Database"=>"LOGIN");

//Conectamos
$conexion=sqlsrv_connect($servidor, $connectionInfo);
// Comprobamos que la conexión es correcta
if (!$conexion) { 
    exit( "Error al conectar con SQL Server: " . $conexion);
}

/*$sql = "select COD, NOM from USUARIOS";
$stmt = sqlsrv_query($conexion, $sql);


// Hacer que sea disponible para su lectura la primera (y en este caso única) fila del conjunto resultado.
if( sqlsrv_fetch( $stmt ) === false) {
    die( print_r( sqlsrv_errors(), true));
}
$cod = sqlsrv_get_field( $stmt, 0);

$nom = sqlsrv_get_field( $stmt, 1);

echo $cod.'--------'.$nom;*/
?>

