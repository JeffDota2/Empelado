<?php 
require_once('../modelo/conexion.php');
require_once('../modelo/DataBase.php');

$mensaje = null;
$consulta = new DataBase();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$id = $_POST['id'];

if(strlen($nombre)>0 && strlen($apellido)>0 && strlen($cargo)>0 && strlen($salario)>0 )
{
    $mensaje = $consulta -> modificarProducto("nombre", $nombre, $id);
    $mensaje = $consulta -> modificarProducto("apellido", $apellido, $id);
    $mensaje = $consulta -> modificarProducto("cargo", $cargo, $id);
    $mensaje = $consulta -> modificarProducto("salario", $salario, $id);
    echo $mensaje;
    echo "<div><a href= '../ver.php'> Ver Productos </a></div>";
}else{
    echo "Porfavor ingrese los datos";
}
//JEFFERSON CUELLO
?>