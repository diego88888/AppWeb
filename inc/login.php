<?php
if(!empty($_POST)){
	if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["centro"])){ 
		if($_POST["username"] != "" && $_POST["password"] != ""  && $_POST["centro"] != ""){
			$usuario = $_POST["username"];
			$contrasena = $_POST["password"];
			//Comprobamos que exista archivo de conexión
			$bbdd = strtoupper($_POST["centro"]);
            if(!file_exists('../conexiones/'.$bbdd.'.php')){
                //No Existe, salimos
				print "<script>alert(\"El centro no existe.\");window.location = '../login.php';</script>";
            }
			//Conectamos con la bbdd del login
			$servidor2 = "localhost\SQLEXPRESS";
			$connectionInfo2 = array("Database"=>"LOGIN");

			//Conectamos
			$conexion2 = sqlsrv_connect($servidor2, $connectionInfo2);
			//Comprobamos que la conexión es correcta
			if (!$conexion2) { 
				exit("Error al conectar con SQL Server: " . $conexion2);
			}
			//Query para sacar el usuario y la contraseña
			$cod_usuario = null;
			$query_login = "select COD, NOM, NOMCEN from USUARIOS where NOM = '".$usuario."' and CLA = '".$contrasena."'";
			
			$stmt2 = sqlsrv_query($conexion2, $query_login);
			if( sqlsrv_fetch($stmt2) === false) {
				die('El servidor remoto SQL SERVER no se encuentra disponible');
			}

			$cod_usuario = sqlsrv_get_field($stmt2, 0);
			$nom_usuario = sqlsrv_get_field($stmt2, 1);
			$nomcen_usuario = sqlsrv_get_field($stmt2, 2);

			if($cod_usuario == null){
				print "<script>alert(\"Credenciales incorrectas.\");window.location = '../login.php';</script>";
			}else{
				session_start();
				$_SESSION["COD"] = $cod_usuario;
				$_SESSION["NOM"] = $nom_usuario;
				$_SESSION["NOMCEN"] = $nomcen_usuario;
				$_SESSION["BBDD"] = $bbdd;
				?>			
					<script>window.location='../index.php';</script>
				<?php 
			}
		}
	}
}
