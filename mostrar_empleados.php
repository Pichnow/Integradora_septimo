<?php

$conn = new mysqli("localhost","root","", "empresa");


$buscar = " SELECT * FROM empleados";

//ejecutamos la busqueda
$query = mysqli_query($conn, $buscar);

//

foreach ($query as $res){
    echo("<br>Legajo:" .$res['Legajo']);
    echo("<br>Apellido y nombre :" .$res['ApellidoyNombre']);
    echo("<br>Puesto:" .$res[' Puesto']);
    echo("<br>Fecha de ingreso:" .$res['FechaDeIngreso']);
    echo("<hr>");
}

?>