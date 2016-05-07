<?php 
function conexion()
{
	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "venta";

	$conn = new mysqli($server, $username, $password,$database);
}


 ?>