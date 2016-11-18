<?php 
	include_once("../class/class_conexion.php");
	switch ($_GET["accion"]) {
		case '1':
			$conexion = new Conexion();
			$sql = sprintf("SELECT a.id_expediente, a.fecha_ingreso, a.id_datos_pesonales, a.id_ficha_medica, b.id_ficha_medica, b.grupo_sanguineo, b.anteojos, b.accidentes, b.observaciones, b.tbl_altura_id_altura, c.id_altura, c.altura, /* d.id_ficha_medica, d.id_padecimiento,*/ e.id_datos_pesonales, e.nombre, e.apellido, e.fecha_nacimiento, e.sexo, e.identidad, e.direccion, e.celular, e.email, e.id_ciudad, f.id_ciudad, f.nombre_ciudad, f.id_departamento, g.id_departamento, g.nombre_departamento
							FROM tbl_expediente a
							INNER JOIN tbl_ficha_medica b 
							ON (a.id_ficha_medica = b.id_ficha_medica)
							INNER JOIN tbl_altura c
							ON (b.tbl_altura_id_altura = c.id_altura)
							/*INNER JOIN tbl_ficha_medica_x_tbl_padecimiento d 
							ON (a.id_ficha_medica = d.id_ficha_medica)*/
							INNER JOIN tbl_datos_pesonales e 
							ON (a.id_datos_pesonales = e.id_datos_pesonales)
							INNER JOIN tbl_ciudad f 
							ON (e.id_ciudad = f.id_ciudad)
							INNER JOIN tbl_departamento g 
							ON (f.id_departamento = g.id_departamento)
							");
			$resultado = $conexion->ejecutarInstruccion($sql);
			while ($fila= $conexion->obtenerFila($resultado)) { ?>

				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
		            <div class="well" style="color: #2E2E2E">
		                <b style="color: #a71e2b;"><?php echo $fila["nombre"] . " " . $fila["apellido"]; ?></b><br>
		                <b>Numero identidad: <?php echo $fila["identidad"] ;?></b><br>
		                <b>Fecha de Ingreso: <?php echo $fila["fecha_ingreso"] ;?></b><br>
		                <a href="form_detalle_expediente.php?id_expediente=<?php echo $fila["id_expediente"] ?> ">ver detalles</a>
		            </div>
		        </div>
				
			<?php
			}
			break;
		case '2':
			# code...
			break;
		case '3':
			# code...
			break;
		case '4':
			# code...
			break;


		default:
			# code...
			break;
	}


?>