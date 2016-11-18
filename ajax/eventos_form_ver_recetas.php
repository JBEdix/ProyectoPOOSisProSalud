<?php 
	include_once("../class/class_conexion.php");
	switch ($_GET["accion"]) {
		case '1':
			$conexion = new Conexion();
			$sql = sprintf("SELECT a.id_receta, a.nombre_receta, a.descripcion 
							FROM tbl_receta a
							");
			$resultado = $conexion->ejecutarInstruccion($sql);
			while ($fila= $conexion->obtenerFila($resultado)) { ?>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div style="color: black;" class="well">
                        <h3 style="color: gray;"><?php echo $fila["nombre_receta"];?></h3><br>
                        <b>Medicamentos:</b>
                        <?php
                        $sql2 = sprintf("SELECT id_receta, id_medicamento
							FROM tbl_receta_x_tbl_medicamento
							WHERE id_receta = '". $fila["id_receta"] ."'
							");
						$resultado2 = $conexion->ejecutarInstruccion($sql2);
						while ($fila2=$conexion->obtenerFila($resultado2)) {
							$sql3 = sprintf("SELECT id_medicamento, nombre_medicamento 
											 FROM tbl_medicamento
											 WHERE  id_medicamento = '". $fila2["id_medicamento"] ."' ");
							$resultado3 = $conexion->ejecutarInstruccion($sql3);
							while($fila3=$conexion->obtenerFila($resultado3)){?>
							<p><?php echo $fila3["nombre_medicamento"]; ?></p>
						<?php
							}

						}
						?>


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