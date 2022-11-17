<?php

$conn = new mysqli("localhost","root","", "empresa");
$buscar = $_POST['buscar'];

//creamos la cosulta

$buscar = "SELECT empleados.Legajo, empleados.ApellidoyNombre, empleados.FechaDeIngreso,puesto.puesto as 'verPuesto',puesto.sueldo FROM empleados, puesto WHERE empleados.puesto = puesto.id AND empleados.ApellidoyNombre LIKE '%$buscar%'
AND empleados.puesto = puesto.id";

//ejecutamos la busqueda
$query = mysqli_query($conn, $buscar);

//busqueda de empleados

foreach ($query as $res){
    echo("<br>Legajo:" .$res['Legajo']);
    echo("<br>Nombre y apellido:" .$res['ApellidoyNombre']);
    echo("<br>Puesto:" .$res['verPuesto']);
    echo("<br>Sueldo: $ ". $res['sueldo']);
    echo("<br>Fecha de ingreso:" .$res['FechaDeIngreso']);
    
    

    $leg = $res['Legajo'];

    echo("<br><a href='modificar.php?id=".$leg."'>Modificar</a>");
    echo(" <a href='eliminar.php?id=".$leg."'>Eliminar</a>");
    echo("<hr>");

}

?>