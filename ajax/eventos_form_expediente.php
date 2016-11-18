<?php 
    include_once("../class/class_conexion.php");
    switch ($_GET["accion"]) {
        case '1'://llenar select de peso
            $conexion = new Conexion();
            $sql = sprintf("SELECT  id_peso ,  peso 
                            FROM  tbl_peso");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_peso"] ?>"><?php echo $fila["peso"] ;?></option>
             <?php   
            }
            $conexion->cerrarConexion();
            break;
        case '2'://llenar select de altura
            $conexion = new Conexion();
            $sql = sprintf("SELECT id_altura, altura 
                            FROM tbl_altura");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_altura"] ?>"><?php echo $fila["altura"] ;?></option>
             <?php   
            }
            $conexion->cerrarConexion();
            break;
        case '3'://llenar select de padecimiento
            $conexion = new Conexion();
            $sql = sprintf("SELECT id_padecimiento, nombre_padecimiento FROM tbl_padecimiento");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_padecimiento"] ?>"><?php echo $fila["nombre_padecimiento"];?></option>

             <?php   
            }
            $conexion->cerrarConexion();
            break;
        case '4'://llenar select de departamento
            $conexion = new Conexion();
            $sql = sprintf("SELECT  id_departamento ,  nombre_departamento 
                            FROM  tbl_departamento ");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_departamento"] ?>"><?php echo $fila["nombre_departamento"];?></option>

             <?php   
            }
            $conexion->cerrarConexion();
            break;
            
        case '5'://llenar select de ciudad
            $conexion = new Conexion();
            $sql = sprintf("SELECT  id_ciudad ,  nombre_ciudad ,  id_departamento 
                            FROM  tbl_ciudad 
                            WHERE  id_departamento = '%s' ",
                            stripslashes($_POST["codigoDepartamento"]));
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_ciudad"] ?>"><?php echo $fila["nombre_ciudad"];?></option>

             <?php   
            }
            $conexion->cerrarConexion();
            break;
        case '6'://guardar informacion
            $conexion = new Conexion();

            $sql = sprintf("INSERT INTO tbl_datos_pesonales 
                          (id_datos_pesonales, nombre, apellido , fecha_nacimiento, sexo, identidad, direccion, celular, email, id_ciudad) 
                          VALUES (null,'%s' ,'%s' ,'%s', '%s', '%s', '%s' ,'%s' ,'%s' ,'%s')",
                          stripslashes($_POST["txt_nombre"]),
                          stripslashes($_POST['txt_apellido']),
                          stripslashes($_POST['date_fecha_nac']),
                          stripslashes($_POST['slc_sexo']),
                          stripslashes($_POST['txt_num_identidad']),
                          stripslashes($_POST['txt_direccion']),
                          stripslashes($_POST['txt_celular']),
                          stripslashes($_POST['txt_email']),
                          stripslashes($_POST['slc_ciudad']));

            $resultado = $conexion->ejecutarInstruccion($sql);
            
            $resultado = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
            $fila = $conexion->obtenerFila($resultado);

            $sql2 = sprintf("INSERT INTO tbl_ficha_medica 
                          (id_ficha_medica, grupo_sanguineo, anteojos, accidentes, observaciones, tbl_altura_id_altura) 
                          VALUES (null,'%s' ,'%s' ,'%s', '%s', '%s')",
                          stripslashes($_POST["slc_grupo_sanguineo"]),
                          stripslashes($_POST['slc_anteojos']),
                          stripslashes($_POST['slc_accidentes']),
                          stripslashes($_POST['txt_observaciones']),
                          stripslashes($_POST['slc_altura']));

            $resultado2 = $conexion->ejecutarInstruccion($sql2);
            
            
            $resultado2 = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
            $fila2 = $conexion->obtenerFila($resultado2);

            $padecimientos = $_POST["slc_padecimiento"];
            if ($fila2["id"]>0){
                for ($i=0;$i<count($padecimientos);$i++){
                    $sql3 = sprintf(
                        "INSERT INTO tbl_ficha_medica_x_tbl_padecimiento(id_ficha_medica, id_padecimiento) 
                         VALUES ('%s','%s')",
                        stripslashes($fila2["id"]),
                        stripslashes($padecimientos[$i])                       
                    );
                    $resultado3 = $conexion->ejecutarInstruccion($sql3);
                }
            }


            
            $sql4 = sprintf("INSERT INTO tbl_expediente 
                            (id_expediente, fecha_ingreso, id_datos_pesonales, id_ficha_medica)
                            VALUES (NULL ,  '%s',  '%s',  '%s')",
                            stripslashes($_POST["date_fecha_ing"]),
                            stripslashes($fila["id"]),
                            stripslashes($fila2["id"])
                            );
            $resultado4 = $conexion->ejecutarInstruccion($sql4);
            if ($resultado4 && $resultado && $resultado2 && $resultado3 ) {?>
            <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Expediente se ha guardado con exito</div>                
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