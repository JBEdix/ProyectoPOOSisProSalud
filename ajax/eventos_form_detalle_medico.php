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
							WHERE a.id_empleado = '%s' ",
							stripslashes($_POST['txt_id_empleado']));
			$resultado = $conexion->ejecutarInstruccion($sql);
			$fila= $conexion->obtenerFila($resultado)  ?>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		            <div class="well" style="color: #2E2E2E">
		            	<?php 
						echo '<img src="blob.php?id='.$fila["id_empleado"].'" alt="Img" class="img-responsive" >'; 
						?>
		            </div>
		            <b style="color: #a71e2b;"><?php echo $fila["nombre"] . " " . $fila["apellido"]; ?></b><br>
		                <b>Numero identidad: <?php echo $fila["identidad"] ;?></b><br>
		                <b>nombre tipo usuario: <?php echo $fila["nombre_tipo_usuario"] ;?></b><br>
		                <b>salario: <?php echo $fila["salario"] . " " . $fila["descripcion"] ;?></b><br>
		                <b>Fecha de Nacimiento: <?php echo $fila["fecha_nacimiento"] ;?></b><br>
		                <b>sexo: <?php echo $fila["sexo"] ;?></b><br>
		                <b>direccion: <?php echo $fila["direccion"] ;?></b><br>
		                <b>celular: <?php echo $fila["celular"] ;?></b><br>
		                <b>email: <?php echo $fila["email"] ;?></b><br>
		                <b>nombre departamento: <?php echo $fila["nombre_departamento"] ;?></b><br>
		                <b>nombre ciudad: <?php echo $fila["nombre_ciudad"] ;?></b><br>
		                <b>Fecha de Ingreso: <?php echo $fila["fecha_ingreso"] ;?></b><br>
		                
		                

		        </div>
				
			<?php
			
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