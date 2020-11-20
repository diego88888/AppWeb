<?php
if(!empty($_POST)){
	if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["centro"])){ 
		if($_POST["username"]!="" && $_POST["password"]!=""  && $_POST["centro"]!="" ){
			$usuario = $_POST["username"];
			$contrasena = $_POST["password"];
			// comprobamos que exista archivo de conexión
			// primero cambiamos a mayúsculas
			$bbdd=strtoupper($_POST["centro"]);
            if ( !file_exists('../conexiones/'.$bbdd.'.php') ){
                // No Existe, salimos
				print "<script>alert(\"El centro no existe.\");window.location='../login.php';</script>";
            }			

			$ruta_conexion = "../conexiones/".$bbdd.".php";
			include $ruta_conexion;
			//Conectamos con la bbdd del login

			$servidor2="localhost\SQLEXPRESS";
			$connectionInfo2 = array( "Database"=>"LOGIN");

			//Conectamos
			$conexion2=sqlsrv_connect($servidor2, $connectionInfo2);
			// Comprobamos que la conexión es correcta
			if (!$conexion2) { 
				exit( "Error al conectar con SQL Server: " . $conexion2);
			}
			//Query para sacar el usuario y la contraseña
			$user_cod=null;
			$query_login = "select COD, NOM from USUARIOS where NOM='".$usuario."' and CLA='".$contrasena."'";
			
			$stmt2 = sqlsrv_query($conexion2, $query_login);
			if( sqlsrv_fetch( $stmt2 ) === false) {
				die( 'El servidor remoto SQL SERVER no se encuentra disponible');
			}

			$user_cod = sqlsrv_get_field( $stmt2, 0);
			$user_nom = sqlsrv_get_field( $stmt2, 1);

			if($user_cod==null){
				//introducir en la bbdd el login incorrecto
				// por hacer
				print "<script>alert(\"Credenciales incorrectas.\");window.location='../login.php';</script>";
			}else{
				session_start();
				//introducir en la bbdd el login correcto
				// por hacer
				$_SESSION["COD"]=$user_cod;
				$_SESSION["NOM"]=$user_nom;
				$_SESSION["BBDD"]=substr($bbdd, 3, 3);
				?>			
					<script>window.location='../index.php';</script>
				<?php 
			}
		}
	}
}
