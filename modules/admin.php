<?php 
function Content(){
	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "venta";

	$conn = new mysqli($server, $username, $password,$database);
	$rs= 'select compra.fecha, compra.estatus, descrip.cantidad, pelicula.nombre, pelicula.precio from  usuario 
			inner join orden on usuario.id = orden.id
			inner join compra on orden.ID_compra = compra.ID_compra
			inner join descrip on compra.ID_compra = descrip.ID_compra
			inner join pelicula on descrip.ID_pelicula = pelicula.ID_pelicula
			where usuario.id = '.$_SESSION["id"].';
			';
	$result = $conn->query($rs);
	if ($result->num_rows > 0) 
	{
		echo "<div class='table-responsive'>
				<table class='table table-condensed table-hover'>";
		echo "<tr>
				<th>Fecha</th>
				<th>Nombre de la pelicula</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Estatus</th>
			</tr>";
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>
					<td>".$row['fecha']."</td>
					<td>".ucwords($row['nombre'])."</td>
					<td>".$row['precio']." Bs.F</td>
					<td>".$row['cantidad']."</td>
					<td>".ucwords($row['estatus'])."</td>
				</tr>";
		}
		echo "</table></div>";
	}else{
		echo "<p>Disculpe, primero debe realizar alguna compra.</p>";
	}
}


function Admin()
{
	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "venta";

	$conn = new mysqli($server, $username, $password,$database);
	$rs= 'select usuario.cedula, compra.fecha, compra.estatus, compra.confirmacion, compra.banco, descrip.cantidad, pelicula.nombre, pelicula.precio from  usuario 
			inner join orden on usuario.id = orden.id
			inner join compra on orden.ID_compra = compra.ID_compra
			inner join descrip on compra.ID_compra = descrip.ID_compra
			inner join pelicula on descrip.ID_pelicula = pelicula.ID_pelicula;
			';
	$result = $conn->query($rs);
	if ($result->num_rows > 0) 
	{
		echo "<div class='table-responsive'>
				<table class='table table-condensed table-hover'>";
		echo "<tr>
				<th>C.I.</th>
				<th>Fecha</th>
				<th>Nombre de la pelicula</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Estatus</th>
				<th>Banco</th>
				<th>Confirmacion</th>
			</tr>";
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>
					<td>V-".$row['cedula']."</td>
					<td>".$row['fecha']."</td>
					<td>".ucwords($row['nombre'])."</td>
					<td>".$row['precio']." Bs.F</td>
					<td>".$row['cantidad']."</td>
					<td>".ucwords($row['estatus'])."</td>
					<td>".ucwords($row['banco'])."</td>
					<td>".ucwords($row['confirmacion'])."</td>
				</tr>";
		}
		echo "</table></div>";
	}else{
		echo "<p>Disculpe, primero debe realizar alguna compra.</p>";
	}
}

 ?>