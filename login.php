<?php
include("Modules/Modules.php");

$correo = $_POST["form-correo"];
$pass = $_POST["form-password"];

$pass=md5($pass);

//echo conexion();
$server = "localhost";
$username = "root";
$password = "";
$database= "venta";

$conn = new mysqli($server, $username, $password,$database);

$login= 'SELECT correo,pass from usuario where correo="'.$correo.'"';

$result = $conn->query($login);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        if ($row["correo"]==$correo) 
        {
        	if ($row["pass"]=$pass) 
        	{
        		$_SESSION["usuario"] = $correo;
                
        		echo "Acceso exitoso"; 
        		// Redirigir o modificar 
        	}
        	else
        	{
        		echo "Clave invalida";
        	}	
        	
        }
    }
}
else

echo "Correo invalido";

$conn->close();



?>