<?php

$str=$_GET["str"];
$server = "localhost";
$username = "root";
$password = "";
$database= "venta";

$conn = new mysqli($server, $username, $password,$database);

$consulta= 'SELECT nombre,link_imagen,precio from pelicula where ID_pelicula='.$str.'';

$result = $conn->query($consulta);

  
    while($row = $result->fetch_assoc()) 
    {

    	echo '<li class="delLiveCar">
	                		<div class="row">
	                			<div class="col-md-2 poster-movie">
	                				<img src="'.$row["link_imagen"].'" width="60" alt="">
	                			</div>
	                			<div class="col-md-8 description-movie">
	                				<h2>'.$row["nombre"].'</h2>
	                				<p>'.$row["precio"].'</p>
	                			</div>
	                			<div class="col-md-2 remove-movie">
	                				<button type="button" class="delcar" onclick="delCar(this)"><img src="images/delete_sign.png" alt=""></button>
	                			</div>
	                		</div>
	                	</li>
	            ';
     
    }

?>