<?php
if(!empty($_POST)){
	if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["centro"])){ 
		if($_POST["username"]!="" && $_POST["password"]!=""  && $_POST["centro"]!="" ){
			// comprobamos que exista archivo de conexión
			// primero cambiamos a mayúsculas
			$bbdd=strtoupper($_POST["centro"]);
            if ( !file_exists('../conexiones/'.$bbdd.'.php') ){
                // No Existe, salimos
				print "<script>alert(\"El centro no existe.\");window.location='../login.php';</script>";
            }			

			$ruta_conexion = "../conexiones/".$bbdd.".php";
			include $ruta_conexion;
			//Conectamos con la bbdd
			//mssql_select_db('WIRTZ', $conexion_nuevo);
			$user_cod=null;
            $consulta_login="select COD, NOM from LOGIN where NOM=\"$_POST[username]\" and CLA=\"$_POST[password]\"";
            $result = sqlsrv_query($conexion, $consulta_login) or die('El servidor remoto SQL SERVER no se encuentra disponible');
            list($user_cod, $user_nom) = sqlsrv_fetch_array($result);	

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
