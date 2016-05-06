<?php 
	function movies($keywords){
		$server   = "localhost";
		$username = "root";
		$password = "";
		$database = "venta";


		$conn = new mysqli($server, $username, $password,$database);
		
		$listadoPeliculas = '';

		if (strlen($keywords) > 0) {
			$listadoPeliculas = 'SELECT ID_pelicula, nombre, link_imagen, precio from pelicula where nombre like "'.$keywords.'%"';
		} else {
			$listadoPeliculas = 'SELECT ID_pelicula,nombre,link_imagen,precio FROM pelicula';
		}
		
		$result = $conn->query($listadoPeliculas);
		 while($row = $result->fetch_assoc()) 
    	{	
    		echo '<div class="movie col-md-4">
					<div class="poster">
						<a href="descripcion.php?pelicula='.$row['ID_pelicula'].'"><img class="poster" src="'.$row['link_imagen'].'" alt="Poster"></a>
					</div>
					<div class="description">
						<h3 class="media-heading movie-title">'.$row['nombre'].'</h3>
						<p>'.$row['precio'].' BsF</p>
						<button type="button" class="btn btn-default" value="'.$row['ID_pelicula'].'" aria-label="Left Align" onclick="addCar(this)">
  							<span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Comprar
						</button>
					</div>
				</div>';
    	}

	}
?>