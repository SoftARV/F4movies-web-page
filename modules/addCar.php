<?php
session_start();

$str=$_GET["str"];

$server = "localhost";
$username = "root";
$password = "";
$database= "venta";

$conn = new mysqli($server, $username, $password,$database);

$consulta= 'SELECT ID_pelicula,nombre,link_imagen,precio from pelicula where ID_pelicula='.$str.'';

$result = $conn->query($consulta);
    while($row = $result->fetch_assoc()) 
    {
    	$_SESSION["id[".$row["ID_pelicula"]."]"]=			$row["ID_pelicula"];
    	$_SESSION["link[".$row["ID_pelicula"]."]"]=			$row["link_imagen"];
    	$_SESSION["nombre[".$row["ID_pelicula"]."]"]=		$row["nombre"];
    	$_SESSION["precio[".$row["ID_pelicula"]."]"]=		$row["precio"];

    	echo 		'<li class="delLiveCar">
	                		<div class="row">
	                			<div class="col-md-2 poster-movie">
	                				<img src="'.$row["link_imagen"].'" width="60" alt="">
	                			</div>
	                			<div class="col-md-8 description-movie">
	                				<h2>'.$row["nombre"].'</h2>
	                				<p>'.$row["precio"].'</p>
	                			</div>
	                			<div class="col-md-2 remove-movie">
	                				<a class="delcar" value="'.$row["ID_pelicula"].'" onclick="delCar(this)"><img src="images/delete_sign.png" alt="Delete"></a>
	                			</div>
	                		</div>
	                	</li>
	            ';
     
    }




?>