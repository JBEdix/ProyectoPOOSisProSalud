<?php 
	include_once("../class/class_conexion.php");
	switch ($_GET["accion"]) {
		case '1': // buscar por medio de la identidad[tbl_expediente] el id_expediente[tbl_expediente]
			$conexion = new Conexion();
			$sql = sprintf("SELECT id_datos_pesonales, identidad, nombre, apellido
							FROM  tbl_datos_pesonales 
							WHERE  identidad =  '".$_POST["txt_num_identidad"]."'
				");
			$resultado = $conexion->ejecutarInstruccion($sql);
			$fila = $conexion->obtenerFila($resultado);

			$sql2 = sprintf("SELECT id_expediente, fecha_ingreso, id_datos_pesonales, id_ficha_medica
							 FROM  tbl_expediente 
							 WHERE  id_datos_pesonales =  '".$fila["id_datos_pesonales"]."'
				");
			$resultado2 = $conexion->ejecutarInstruccion($sql2);
			$fila2 = $conexion->obtenerFila($resultado2);
			
			if ($fila2["id_expediente"]>0) {
				echo "Se encontro expediente ".$fila2["id_expediente"] ;
				echo '<input type="hidden" id="txt_id_expediente" value="'. $fila2["id_expediente"] .'">';
				echo '<input type="hidden" id="txt_nom" value="'. $fila["nombre"] . ' ' . $fila["apellido"] .'">';
			}
			else{
				echo "No se encontro expediente";
			}


			$conexion->cerrarConexion();
			break;
		case '2':// llenar presion arterial
			$conexion = new Conexion();

			$sql= sprintf("SELECT id_presion_arterial, presion_arterial 
						   FROM tbl_presion_arterial");
			$resultado = $conexion->ejecutarInstruccion($sql);
			while ($fila = $conexion->obtenerFila($resultado)) {?>
				<option value="<?php echo $fila["id_presion_arterial"] ?>"><?php echo $fila["presion_arterial"];?></option>
			<?php 
			}
			$conexion->cerrarConexion();
			break;
		case '3'://lenar peso
			$conexion = new Conexion();

			$sql= sprintf("SELECT id_peso, peso
						   FROM tbl_peso");
			$resultado = $conexion->ejecutarInstruccion($sql);
			while ($fila = $conexion->obtenerFila($resultado)) {?>
				<option value="<?php echo $fila["id_peso"] ?>"><?php echo $fila["peso"];?></option>
			<?php 
			}
			$conexion->cerrarConexion();
			break;
		case '4'://lenar precio consulta
			$conexion = new Conexion();

			$sql= sprintf("SELECT id_precio_consulta, precio_consulta, descripcion_precio 
						   FROM tbl_precio_consulta");
			$resultado = $conexion->ejecutarInstruccion($sql);
			while ($fila = $conexion->obtenerFila($resultado)) {?>
				<option value="<?php echo $fila["id_precio_consulta"] ?>"><?php echo $fila["precio_consulta"]." - ". $fila["descripcion_precio"];?></option>
			<?php 
			}
			$conexion->cerrarConexion();
			break;
		case '5'://llenar doctor
			$conexion = new Conexion();

			$sql= sprintf("SELECT a.id_datos_pesonales, a.nombre, a.apellido, b.id_empleado, b.id_tipo_usuario, b.id_datos_pesonales
						   FROM tbl_datos_pesonales a
						   INNER JOIN tbl_empleado b
						   ON (a.id_datos_pesonales = b.id_datos_pesonales)
						   WHERE b.id_tipo_usuario=2 ");
			$resultado = $conexion->ejecutarInstruccion($sql);
			while ($fila = $conexion->obtenerFila($resultado)) {?>
				<option value="<?php echo $fila["id_empleado"] ?>"><?php echo $fila["nombre"]." - ". $fila["apellido"];?></option>
			<?php
			}

			$conexion->cerrarConexion();
			break;
		case '6':
			$conexion = new Conexion();

			$sql= sprintf("INSERT INTO tbl_consulta 
                            (id_consulta, temperatura, turno, fecha_consulta, id_peso, id_presion_arterial, id_precio_consulta, id_empleado, id_expediente )
                            VALUES (NULL , '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
                            stripslashes($_POST['txt_temperatura']),
                            stripslashes($_POST['txt_turno_consulta']),
                            stripslashes($_POST['date_fecha_consulta']),
                            stripslashes($_POST['slc_peso']),
                            stripslashes($_POST['slc_presion_arterial']),
                            stripslashes($_POST['slc_precio_consulta']),
                            stripslashes($_POST['slc_doctor']),
                            stripslashes($_POST['txt_id_expediente'])
                            );


			$resultado = $conexion->ejecutarInstruccion($sql);
			
			if ($resultado) {?>
            <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Consulta se ha guardado con exito</div>                
            <?php   
            }
            else{?>
                <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                No se ha podido guardar la informacion en la base de datos</div>              
            <?php
            }		

			$conexion->cerrarConexion();
			
			break;
		default:
			# code...
			break;
	}



?>
