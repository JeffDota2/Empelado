<?php
    require_once('../modelo/conexion.php');
    require_once('../modelo/DataBase.php');

    if(isset($_GET['nombre'])){
        $id = $_GET['nombre'];
        $buscar = new DataBase();
        $mensaje = $buscar->buscarEmpleado($nombre);
    
        echo $mensaje;
        echo"<div><br><a href= '../ver.php'>Regresar</a></div>";
        //JEFFERSON CUELLO
    }
?>