<?php
include("modules/modules.php");

$correo = $_POST["form-correo"];
$pass = $_POST["form-password"];

$pass=md5($pass);

echo conexion();


$login= 'select correo,pass from usuario where correo='.$correo.'';

$result = $conn->query($login);

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
    {
        if ($row["correo"]==$correo) 
        {
        	if ($row["pass"]=$pass) 
        	{
        		$_SESSION["usuario"] = $pass;
        		//Acceso exitoso 
        		// Redirigir o modificar 
        	}
        	else
        	{
        		//Clave invalida
        	}	
        	
        }
    }
} 
else 
{
    //Correo invalido
}
$conn->close();



?>