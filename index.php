<?php

$ApellidoyNombre = $_POST['ApellidoyNombre'];
$puesto = $_POST['puesto'];
$FechaDeIngreso = $_POST['FechaDeIngreso'];


//crear conexion 

 $conexion = new mysqli("localhost","root","", "empresa") or die ("error");


 //consuLta  para guardar datos

 $alta= "INSERT INTO empleados(ApellidoyNombre,  Puesto, FechaDeIngreso) VALUES ('$ApellidoyNombre', '$puesto','$FechaDeIngreso')";
 // si la unión de las consultas alta y conexion 

 if ($query = mysqli_query($conexion, $alta)){
    echo ("Se ha registrado correctamente al usuario:");
    echo ("<br> Nombre y apellido:". $ApellidoyNombre);
    echo ("<br> Puesto:". $puesto );
    echo ("<br> Fecha de ingreso:". $FechaDeIngreso);
   
 }

 else{
    echo ("Ha ocurrido un error y no sabemos por qué...");
 }


 echo("<br> <a href='index.html'> Cargar otro empleado </a>");
// $resultado = mysqli_query($conexion, $empresa);echo ("datos recibidos:". $apellido);


// $fecha_entrada = new DateTime('FechaDeIngreso');
// $hoy = new DateTime();
// $antiguedad = $hoy->diff($fecha_entrada);

// echo("<br> Antiguedad en años: ". $antiguedad->y);



?>