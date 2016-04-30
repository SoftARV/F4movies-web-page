<?php
session_start();


include("modules/modules.php");

$correo = $_POST["form-correo"];
$pass   = $_POST["form-password"];

$pass=md5($pass);

//echo conexion();
$server   = "localhost";
$username = "root";
$password = "";
$database = "venta";

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

        		die(header("location: ../index.php?loginFailed=false")); 

        		header("Location: ../index.php"); 

        	}
        	else
        	{
        		die(header("location: ../index.php?loginFailed=true"));
                
        	}	
        	
        }
    }
}
else

die(header("location: ../index.php?loginFailed=true"));

$conn->close();



?>