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

$direccion=$direccion1+$direccion2;
$pass=md5($pass);

echo conexion();


$validacion= 'select correo from usuario where correo='.$correo.'';

$result = $conn->query($validacion);

if ($result->num_rows > 0)
{
	//correo registrado
}
else
{

$registro= 'insert into usuario values(default,"'.$cedula.'",'.$nombre.'","'.$apellido.'","'.$correo.'","'.$telefono.'","'.$direccion.'","'.$nick.'","'.$pass.'")';

if ($conn->query($registro) === TRUE) 
{
    //Registro exitoso
} 
else 
{
    //Registro fallido
}

$conn->close();

}



?>