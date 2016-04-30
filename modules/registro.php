<?php

include("modules/modules.php");


$cedula = $_POST["form-cedula"];
$nombre = $_POST["form-name"];
$apellido = $_POST["form-lastname"];
$correo = $_POST["form-correo"];
$telefono = $_POST["form-telefono"];
$direccion1 = $_POST["form-dir1"];
$direccion2 = $_POST["form-dir2"];
$nick = $_POST["form-username"];
$pass = $_POST["form-password"];
$repass = $_POST["form-repassword"];


$direccion=$direccion1+$direccion2;
$pass=md5($pass);

//echo conexion();
$server   = "localhost";
$username = "root";
$password = "";
$database = "venta";

$conn = new mysqli($server, $username, $password,$database);

$validacion= 'SELECT correo from usuario where correo="'.$correo.'"';

$result = $conn->query($validacion);

if ($result->num_rows > 0)
{

	die(header("location: ../index.php?regFailed=true"));

}
else
{

$registro= 'INSERT into usuario values (null,'.$cedula.',"'.$nombre.'","'.$apellido.'","'.$correo.'",'.$telefono.',"'.$direccion.'",1,1,"'.$nick.'","'.$pass.'")';

if ($conn->query($registro) === TRUE) 
{

    die(header("location: ../index.php?regFailed=false"));
} 
else 
{
    die(header("location: ../index.php?regFailed=true"));

   
} 


$conn->close();

}



?>