<?php 
	
	$nombre = $_POST["nombre"];
	$categoria = $_POST["categoria"];
	$genero = $_POST["genero"];
	$censura = $_POST["censura"];
	$duracion = $_POST["duracion"];
	$descripcion = $_POST["descripcion"];
	$linkVideo = $_POST["linkvideo"];
	$linkSitio = $_POST["linksitio"];
	$director = $_POST["director"];
	$precio = $_POST["precio"];

	$server = "localhost";
	$username = "root";
	$password = "";
	$database= "venta";

	$conn = new mysqli($server, $username, $password,$database);


	move_uploaded_file($_FILES["poster"]["tmp_name"],"../images/".$_FILES["poster"]["name"]);

	$validacion= 'SELECT nombre from pelicula where nombre="'.$nombre.'"';

	$result = $conn->query($validacion);

	if ($result->num_rows > 0) {
		alert("entro");
		die(header("location: ../index.php?regFailed=true"));

	} else {
		$registro = 'INSERT into pelicula values (null,"'.$nombre.'","'.$categoria.'","'.$genero.'","'.$censura.'","'.$duracion.'","'.$descripcion.'","'.$linkVideo.'","images/posters/'.$_FILES["poster"]["name"].'","'.$linkSitio.'","'.$director.'",'.$precio.',1)';
		if ($conn->query($registro) === TRUE) {
    		die(header("location: ../index.php?regFailed=false"));
		} else {
    		die(header("location: ../index.php?regFailed=true"));
   		} 
	}


	$conn->close();

 ?>