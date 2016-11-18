<?php 
	include_once("../class/class_conexion.php");
	$conexion = new Conexion();

	$datos= $_POST["info"];
	print_r($datos);

	$infopaciente = array();
	$infopadecimientos = array();
	foreach ($datos["dataArray"] as $key => $value) {
		$infopaciente('NOMBRE' => $value['nombre'],
					  'APELLIDO' => $value['apellido'],
					  'IDENTIDAD' => $value['identidad']
					  'FECHA_INGRESO' => $value['fecha_ing'],
					  'FECHA_NAC' => $value['fecha_nac'],
					  'SEXO' => $value['sexo'],
					  'DEPARTAMENTO' => $value['departamento'],
					  'CIUDAD' => $value['ciudad'],
					  'DIRECCION' => $value['direccion'],
					  'CELULAR' => $value['celular'],
					  'EMAIL' => $value['email'],
					  'GRUPO_SANGUINEO' => $value['grupo_sanguineo'],
					  'ANTEOJOS' => $value['anteojos'],
					  'ACCIDENTES' => $value['accidentes'],
					  'OBSERVACIONES' => $value['observaciones']);
	}

	$query = "INSERT INTO tbl_datos_pesonales 
				(id_datos_pesonales ,
				nombre ,
				apellido ,
				fecha_nacimiento ,
				sexo ,
				identidad ,
				direccion ,
				celular ,
				email ,
				id_ciudad) 
			  VALUES (null,'%s' ,'%s' ,'%s', '%s', '%s', '%s' ,'%s' ,'%s' ,'%s')",
			  stripslashes($infopaciente['NOMBRE']),
			  stripslashes($infopaciente['APELLIDO']),
			  stripslashes($infopaciente['FECHA_NAC']),
			  stripslashes($infopaciente['SEXO']),
			  stripslashes($infopaciente['IDENTIDAD']),
			  stripslashes($infopaciente['DIRECCION']),
			  stripslashes($infopaciente['CELULAR']),
			  stripslashes($infopaciente['EMAIL']),
			  stripslashes($infopaciente['CIUDAD']);

	$conexion->ejecutarIntruccion($query);

	$query2 = "INSERT INTO tbl_ficha_medica (id_ficha_medica, grupo_sanguineo, anteojos, accidentes, observaciones)
			  VALUES (NULL ,  '%s', '%s', '%s', '%s');",
			  stripslashes($infopaciente['GRUPO_SANGUINEO']),
			  stripslashes($infopaciente['ANTEOJOS']),
			  stripslashes($infopaciente['FECHA_NAC']),
			  stripslashes($infopaciente['ACCIDENTES']),
			  stripslashes($infopaciente['OBSERVACIONES']);

	$resultado = $conexion->ejecutarIntruccion($query2);
	$resultado = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
	$fila = $conexion->obtenerFila($resultado);

	foreach ($datos["padecimientos"] as $key => $value) {
		$infopadecimientos('ID' => $value['id_padecimiento']);		
		$query3 = "INSERT INTO tbl_ficha_medica_x_tbl_padecimiento (id_ficha_medica, id_padecimiento) 
				  VALUES ('%s','%s')",
				  stripslashes($fila["id"]),
				  stripslashes($infopadecimientos['ID']);
	}

	$conexion->ejecutarIntruccion($query3);
	$resultado = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
	$fila2 = $conexion->obtenerFila($resultado);
	
	$query4 = "INSERT INTO tbl_ficha_medica (id_expediente, fecha_ingreso, id_datos_pesonales, id_ficha_medica)
			  VALUES (NULL ,  '%s', '%s', '%s');",
			  stripslashes($infopaciente['FECHA_INGRESO']),
			  stripslashes($fila["id"]),
			  stripslashes($fila2["id"]);


?>