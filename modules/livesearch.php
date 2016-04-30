<?php

$str=$_GET["str"];
$data="";

$server = "localhost";
$username = "root";
$password = "";
$database= "venta";

$conn = new mysqli($server, $username, $password,$database);

$consulta= 'SELECT nombre from pelicula where nombre like "'.$str.'%"';

$result = $conn->query($consulta);

  
    while($row = $result->fetch_assoc()) 
    {
    	echo $row["nombre"]."<br>";
    }

?>