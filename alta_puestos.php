<?php
$conn = new mysqli("localhost","root","", "empresa");



$puesto = $_POST['puesto'];

$sueldo = $_POST['sueldo'];

$alta = "INSERT INTO puesto(puesto,sueldo) VALUES ('$puesto', '$sueldo')";

$query = mysqli_query($conn, $alta);

if ($query){
    echo ("se ha dado de alta  ". $puesto);
    
    echo (" <br> <a href='index.html'> volver </a>");
}




?>