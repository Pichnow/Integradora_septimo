<?php
$conn = new mysqli("localhost","root","","empresa");

//recibimos los datos del form
$ape_nom = $_POST['apellido_nombre'];
$puesto = $_POST['puesto'];
$fecha_ingreso = $_POST['fecha_ing'];
$legajo = $_POST['legajo'];

//consulta para hacer update
$actualizar = "UPDATE empleados SET ApellidoyNombre = '$ape_nom',Puesto = '$puesto',FechaDeIngreso= '$fecha_ingreso' WHERE Legajo = '$legajo'";

//ejecutamos consulta

$query = mysqli_query($conn, $actualizar);

if($query){
    echo("Se han actualizado correctamente los datos....");
}
?>