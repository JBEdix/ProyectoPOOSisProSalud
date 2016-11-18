<?php
	include_once("../class/class_conexion.php");
	switch ($_GET["accion"]) {
		case '1':
			$conexion = new Conexion();
            $sql = sprintf("SELECT id_consulta, temperatura, id_peso, id_presion_arterial,id_empleado, id_expediente 
            				FROM tbl_consulta ");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_consulta"] ?>"><?php echo $fila["id_consulta"] ;?></option>
             <?php   
            }

            $conexion->cerrarConexion();
			break;
		case '2':
			$conexion = new Conexion();
            $sql = sprintf("SELECT a.id_consulta, a.temperatura, a.turno, a.id_presion_arterial, a.id_empleado, a.id_expediente, b.id_presion_arterial, b.presion_arterial, c.id_expediente, c.id_datos_pesonales, d.id_datos_pesonales, d.nombre, d.apellido
            				FROM tbl_consulta a
            				INNER JOIN tbl_presion_arterial b
            				ON (a.id_presion_arterial = b.id_presion_arterial)
            				INNER JOIN tbl_expediente c 
            				ON (a.id_expediente = c.id_expediente )
            				INNER JOIN tbl_datos_pesonales d
            				ON (c.id_datos_pesonales = d.id_datos_pesonales)
            				WHERE a.id_consulta= '%s' ",
            				stripslashes($_POST["slc_consulta"]));
            $resultado = $conexion->ejecutarInstruccion($sql);
            $fila= $conexion->obtenerFila($resultado);
            echo json_encode($fila);

            $conexion->cerrarConexion();			
			break;
		case '3':
			$conexion = new Conexion();
            $sql = sprintf("SELECT id_sintoma, nombre_sintoma FROM tbl_sintoma");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_sintoma"] ?>"><?php echo $fila["nombre_sintoma"];?></option>

             <?php   
            }

            $conexion->cerrarConexion();
			break;
		case '4':
			$conexion = new Conexion();
            $sql = sprintf("SELECT id_receta, nombre_receta FROM tbl_receta");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_receta"] ?>"><?php echo $fila["nombre_receta"];?></option>

             <?php   
            }
            
            $conexion->cerrarConexion();
			break;
		case '5':
			$conexion = new Conexion();

            $sql = sprintf("INSERT INTO tbl_recetario 
                          (id_recetario, diagnostico_final, id_consulta) 
                          VALUES (null,'%s' ,'%s' )",
                          stripslashes($_POST["txt_diagnostico"]),
                          stripslashes($_POST['slc_consulta']));
            $resultado = $conexion->ejecutarInstruccion($sql);
            
            $resultado = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
            $fila = $conexion->obtenerFila($resultado);

            $sintomas = $_POST["slc_sintoma"];
            $receta = $_POST["slc_receta"];
            if ($fila["id"]>0){
                for ($i=0;$i<count($sintomas);$i++){
                    $sql2 = sprintf(
                        "INSERT INTO tbl_recetario_x_tbl_sintoma
                        (id_recetario, id_sintoma) 
                         VALUES ('%s','%s')",
                        stripslashes($fila["id"]),
                        stripslashes($sintomas[$i])                       
                    );
                    $resultado2 = $conexion->ejecutarInstruccion($sql2);
                }
                for ($i=0;$i<count($receta);$i++){
                    $sql3 = sprintf(
                        "INSERT INTO tbl_recetario_has_tbl_receta
                        (id_recetario, id_receta) 
                         VALUES ('%s','%s')",
                        stripslashes($fila["id"]),
                        stripslashes($receta[$i])                       
                    );
                    $resultado3 = $conexion->ejecutarInstruccion($sql3);
                }

            }


            
            
            if ($resultado && $resultado2 && $resultado3) {?>
            <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Recetario se ha guardado con exito</div>                
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
		case '6':
			# code...
			break;		

		default:
			# code...
			break;
	}

?>