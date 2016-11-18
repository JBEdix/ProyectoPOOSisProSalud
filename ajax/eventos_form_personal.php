<?php
    include_once("../class/class_conexion.php");
    switch ($_GET["accion"]) {
        case '1':
            if (isset($_FILES["file"])){
            $file = $_FILES["file"];
            $nombre = $file["name"];
            $tipo = $file["type"];
            $ruta_provisional = $file["tmp_name"];
            $size = $file["size"];
            $dimensiones = getimagesize($ruta_provisional);
            $width = $dimensiones[0];
            $height = $dimensiones[1];
            $carpeta = "../img/carnet/";
            
            if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
            {
              echo "Error, el archivo no es una imagen"; 
            }
            else if ($size > 1024*1024)
            {
              echo "Error, el tamaño máximo permitido es un 1MB";
            }
            else if ($width > 500 || $height > 500)
            {
                echo "Error la anchura y la altura maxima permitida es 500px";
            }
            else if($width < 60 || $height < 60)
            {
                echo "Error la anchura y la altura mínima permitida es 60px";
            
            }else
            {
                $binario_contenido = addslashes(fread(fopen($ruta_provisional, "rb"), filesize($ruta_provisional)));
                $src = $carpeta.$nombre;
                move_uploaded_file($ruta_provisional, $src);
                echo "<img id='' src='$src'>";
                echo "<textarea  id='img_foto' style='display: none;'>". $binario_contenido ."</textarea>";
            }
            
            
            }else{
                echo "No hay archivo";
            }
            break;
        case '2':
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
        case '3'://llenar ciudad
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
        case '4'://llenar salario
            $conexion = new Conexion();
            $sql = sprintf("SELECT id_salario, salario, descripcion 
                            FROM tbl_salario");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_salario"] ?>"><?php echo $fila["salario"]. " - " .$fila["descripcion"];?></option>

             <?php   
            }
            $conexion->cerrarConexion();
            break;
        case '5'://llenar usuarios
            $conexion = new Conexion();
            $sql = sprintf("SELECT id_tipo_usuario, nombre_tipo_usuario FROM tbl_tipo_usuario");
            $resultado = $conexion->ejecutarInstruccion($sql);
            while ($fila= $conexion->obtenerFila($resultado)) { ?>
                    <option value="<?php echo $fila["id_tipo_usuario"] ?>"><?php echo $fila["nombre_tipo_usuario"];?></option>

             <?php   
            }
            $conexion->cerrarConexion();
            break;
        case '6'://Guardar personal
            $conexion = new Conexion();
            $sql = sprintf("INSERT INTO tbl_datos_pesonales 
                          (id_datos_pesonales, nombre, apellido , fecha_nacimiento, sexo, identidad, direccion, celular, email, id_ciudad) 
                          VALUES (null,'%s' ,'%s' ,'%s', '%s', '%s', '%s' ,'%s' ,'%s' ,'%s')",
                          stripslashes($_POST['txt_nombre']),
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


            $sql2= sprintf("INSERT INTO tbl_empleado
                          (id_empleado, fecha_ingreso, fotografia, usuario, contrasena, id_tipo_usuario, id_datos_pesonales, id_salario) 
                          VALUES (null,'%s' ,'%s' ,'%s', '%s', '%s', '%s' ,'%s')",
                          stripslashes($_POST['date_fecha_ing']),
                          stripslashes($_POST['img_foto']),
                          stripslashes($_POST['txt_usuario']),
                          stripslashes($_POST['txt_contrasena']),
                          stripslashes($_POST['slc_tipo_usuario']),
                          stripslashes($fila['id']),
                          stripslashes($_POST['slc_salario']));

            $resultado2 = $conexion->ejecutarInstruccion($sql2);            
            
            $resultado2 = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
            $fila2 = $conexion->obtenerFila($resultado2);

            if ($resultado && $resultado2) {?>
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