<?php
function cargarEmpleado(){
    if(isset($_GET['id'])){
        $consulta = new DataBase();
        $id = $_GET['id'];
        $filas = $consulta->recuperarEmpleado($id);
        foreach($filas as $fila){
            echo'
            <form action="Controlador/modificarEmpleado.php" method="post">
                <table>
                    <tr>
                        <td> NOMBRE </td>
                        <td> <input type="text" name="nombre" value = "'.$fila['nombre'].'"> </td>
                    </tr>
                    
                    <tr>
                        <td> APELLIDO </td>
                        <td> <input type="textarea" name="apellido" value = "'.$fila['apellido'].'"> </td>
                    </tr>
            
                    <tr>
                        <td> CARGO </td>
                        <td> <input type="text" name="cargo" value = "'.$fila['cargo'].'"> </td>
                    </tr>
            
                    <tr>
                        <td> SALARIO </td>
                        <td> <input type="text" name="salario" value = "'.$fila['salario'].'"> </td>
                    </td>

                    <tr>
                        <td> &nbsp; </td>
                        <td> <input type="hidden" name="id" value="'.$id.'"> </td>
                    </tr>
            
                    <tr>
                        <td> <input type="submit" value="Modificar"> </td>
                    </tr>
                </table>
            </form>';
        }
    }
}
//JEFFERSON CUELLO
?>
