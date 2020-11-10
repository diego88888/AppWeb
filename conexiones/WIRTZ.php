<?php
// y esta es la conexión al SQL Server
$servidor="localhost\SQLEXPRESS";
$connectionInfo = array( "Database"=>"WIRTZ");

//Conectamos
$conexion=sqlsrv_connect($servidor, $connectionInfo);
// Comprobamos que la conexión es correcta
if (!$conexion) { 
    exit( "Error al conectar con SQL Server: " . $conexion);
}
?>

