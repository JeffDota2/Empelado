<?php 
require_once('../modelo/conexion.php');
require_once('../modelo/DataBase.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $consultas = new DataBase();
    $mensaje = $consultas->eliminarEmpleado($id);

    echo $mensaje;
    echo"<div><br><a href= '../ver.php'>Regresar</a></div>";
}
//JEFFERSONCUELLO
?>