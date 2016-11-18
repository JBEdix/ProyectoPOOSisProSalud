<?php 
include_once("../class/class_conexion.php");
 header("Content-type: image/jpg "); 
if(isset($_GET['id'])){ 
    $id = $_GET['id']; 
    //$link = mysql_connect("localhost", "root", "") or die ("ERROR AL CONECTAR"); 
    //$db_select = mysql_select_db("db_colossus") or die ("ERROR AL SELECCIONAR DB"); 
    $conexion = new Conexion();
    $q = "SELECT * FROM tbl_empleado WHERE id_empleado = '$id'"; 
    //$result = mysql_query($q, $link) or die ("Error al consultar"); 
    $resultado = $conexion->ejecutarInstruccion($q);

    //while ($fila = mysql_fetch_assoc($resultado)) {
    while ($fila = $conexion->obtenerFila($resultado)) {
    echo $fila["fotografia"]; 
    } 
     
    //mysql_free_result($result); 
    $conexion->liberarResultado($resultado);
    } else { 
        echo 'NO ID'; 
        } 



?>