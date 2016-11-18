<?php
	include_once("../class/class_conexion.php");
	
	switch ($_GET["accion"]) {
		case 1: 
			$conexion = new Conexion();
			$sql = sprintf("SELECT id_empleado, usuario,  contrasena, id_tipo_usuario 
					FROM tbl_empleado 
					WHERE usuario = '%s'
					AND contrasena = '%s'",
					stripslashes($_POST["usuario"]),
					stripslashes($_POST["contraseña"])
				);
			$resultado = $conexion->ejecutarInstruccion($sql);
			$c = 0;
			if ($conexion->cantidadRegistros($resultado)) {
			 	echo "1";
			 } 
			else {
				echo "0";
			}
			$conexion->cerrarConexion();
			
			break;
		case 2: //Usuario doctor
			echo "2";
			break;
		case 3: //Usuario recepcionista
			echo "3";
			break;	
		case 0: //Usuario recepcionista
			echo "0";//espacio en blanco
			break;	
		default:
			echo "error en tipo de usuario";
			break;
	}
	
?>