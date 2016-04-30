<?php 

function pelicula($id_pelicula){
	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "venta";


	$conn = new mysqli($server, $username, $password,$database);
	$pelicula = 'SELECT * FROM pelicula where ID_pelicula='.$id_pelicula;
	$result = $conn->query($pelicula);
		while($row = $result->fetch_assoc()) 
    	{
    		$_SESSION['nombre'] 		= $row['nombre'];
    		$_SESSION['categoria'] 		= $row['categoria'];
    		$_SESSION['genero'] 		= $row['genero'];
    		$_SESSION['censura'] 		= $row['censura'];
    		$_SESSION['duracion'] 		= $row['duracion'];
    		$_SESSION['descripcion'] 	= $row['descripcion'];
    		$_SESSION['link_video'] 	= $row['link_video'];
    		$_SESSION['link_imagen'] 	= $row['link_imagen'];
    		$_SESSION['link_sitio'] 	= $row['link_sitio'];
    		$_SESSION['director'] 		= $row['director'];
    		$_SESSION['precio'] 		= $row['precio'];
    	}
	}
?>