<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database= "venta";

	if (!$db = new mysqli($server, $username, $password, $database)) {
		die($db->connect_errno.' - '.$db->connect_error);
	}

	$data = array();

	if (!empty($_POST["keywords"])) {
		$keywords = $_POST['keywords'];
		$queryMovie = 'SELECT ID_pelicula, nombre from pelicula where nombre like "'.$keywords.'%"';
		$result = $db -> query($queryMovie) or die($mysqli->error);
		if ($result->num_rows > 0) {
			while ($obj = $result->fetch_object()) {
				$data[] = array('id' => $obj->ID_pelicula, 'nombre' => $obj->nombre);
			}
		}
	}

	echo json_encode($data);

?>