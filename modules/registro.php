<?php
include("modules/Modules.php");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$direccion1 = $_POST["direccion1"];
$direccion2 = $_POST["direccion2"];
$nick = $_POST["nick"];
$pass = $_POST["pass"];

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