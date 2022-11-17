<?php
$conn = new mysqli("localhost","root","","empresa");
$id_empleado = $_GET['id'];

//consulta para eliminar empleado

$baja = "DELETE FROM empleados WHERE Legajo = '$id_empleado'";

//ejecutar baja

$query = mysqli_query($conn, $baja);
if($query){
    echo("Se ha dado de baja correctamente.");
}



?