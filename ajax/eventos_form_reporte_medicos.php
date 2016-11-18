<?php 
	include_once("../class/class_conexion.php");
	switch ($_GET["accion"]) {
		case '1':
			$conexion = new Conexion();
			$sql = sprintf("SELECT a.id_empleado, a.fecha_ingreso, a.fotografia, a.usuario, a.contrasena, a.id_tipo_usuario, a.id_datos_pesonales, a.id_salario, b.id_tipo_usuario, b.nombre_tipo_usuario, c.id_salario, c.salario, c.descripcion, e.id_datos_pesonales, e.nombre, e.apellido, e.fecha_nacimiento, e.sexo, e.identidad, e.direccion, e.celular, e.email, e.id_ciudad, f.id_ciudad, f.nombre_ciudad, f.id_departamento, g.id_departamento, g.nombre_departamento
							FROM tbl_empleado a
							INNER JOIN tbl_tipo_usuario b
							ON (a.id_tipo_usuario = b.id_tipo_usuario)
							INNER JOIN tbl_salario c 
							ON (a.id_salario = c.id_salario)
							INNER JOIN tbl_datos_pesonales e 
							ON (a.id_datos_pesonales = e.id_datos_pesonales)
							INNER JOIN tbl_ciudad f 
							ON (e.id_ciudad = f.id_ciudad)
							INNER JOIN tbl_departamento g 
							ON (f.id_departamento = g.id_departamento)
							WHERE a.id_tipo_usuario = 2

				");
			$resultado = $conexion->ejecutarInstruccion($sql);
			while ($fila= $conexion->obtenerFila($resultado)) { ?>

				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
		            <div class="well" style="color: #2E2E2E">
		            	<?php 
						echo '<img src="blob.php?id='.$fila["id_empleado"].'" alt="Img" class="img-responsive" >'; 
						?>
		                <b style="color: #a71e2b;"><?php echo $fila["nombre"] . " " . $fila["apellido"]; ?></b><br>
		                <b>Numero identidad: <?php echo $fila["identidad"] ;?></b><br>
		                <b>Fecha de Ingreso: <?php echo $fila["fecha_ingreso"] ;?></b><br>
		                <a href="form_detalle_medico.php?id_empleado=<?php echo $fila["id_empleado"] ?> ">ver detalles</a>
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