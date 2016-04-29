<?php 
	function listadopeliculas(){
	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "venta";

$conn = new mysqli($server, $username, $password,$database);

$peliculas = 'SELECT ID_pelicula,nombre,categoria,link_imagen FROM pelicula';

$result = $conn->query($login);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

}


	function pelicula(){

	}

?>