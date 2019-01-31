<?php
require_once('../modelo/conexion.php');
require_once('../modelo/DataBase.php');

$mensaje = null;

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];

if(strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($cargo) > 0 && strlen($salario) > 0){
    $consulta = new DataBase();
    $mensaje = $consulta->insertarEmpleado($nombre,$apellido,$cargo,$salario);
    echo "<a href='../insertar.html'>Regresar</a>";
}else{
    echo "Por favor ingrese la información";
}
echo $mensaje;
//JEFFERSONCUELLO

?>