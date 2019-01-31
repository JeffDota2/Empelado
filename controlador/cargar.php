<?php
    function cargar(){
        $consulta = new DataBase();
        $filas = $consulta->consultarEmpleado();
        echo "<table border = 1  bordercolor=blue >
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CARGO</th>
                <th>SALARIO</th>";

        foreach($filas as $fila){
                echo"<tr>";
                echo"<td>".$fila['id']."</td>";
                echo"<td>".$fila['nombre']."</td>";
                echo"<td>".$fila['apellido']."</td>";
                echo"<td>".$fila['cargo']."</td>";
                echo"<td>".$fila['salario']."</td>";
                echo"<td><a href='Controlador/eliminar.php?id=".$fila['id']."'>Eliminar</td>";
                echo"<td><a href='modificar.php?id=".$fila['id']."'>Modificar</td>";
                echo"</tr>";
        }
        echo "</table>";
}

        function buscar($nombre){
                $buscar = new DataBase();
                $filas = $buscar->buscarEmpleado($nombre);
                echo "<table border = 1  bordercolor=blue >
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CARGO</th>
                        <th>SALARIO</th>";
                
                if(isset($filas)){    
                foreach($filas as $fila){
                        echo"<tr>";
                        echo"<td>".$fila['id']."</td>";
                        echo"<td>".$fila['nombre']."</td>";
                        echo"<td>".$fila['apellido']."</td>";
                        echo"<td>".$fila['cargo']."</td>";
                        echo"<td>".$fila['salario']."</td>";                        
                        echo"<td><a  href = 'Controlador/eliminar.php?id=".$fila['id']."'>Eliminar</td>";
                        echo"<td><a  href = 'modificar.php?id=".$fila['id']."'>Modificar</td>";
                        echo"</tr>";
                }
                echo "</table>";
        }
}
//JEFFERSON CUELLO
?>