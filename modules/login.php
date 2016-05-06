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

$login= 'SELECT id,correo,pass,perfil,nickname from usuario where correo="'.$correo.'"';

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
                $_SESSION["id"] = $row['id'];
                $_SESSION["perfil"] = $row['perfil'];
                $_SESSION["name"]  = $row['nickname'];
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