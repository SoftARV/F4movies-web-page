<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";
$database= "venta";
$conn = new mysqli($server, $username, $password,$database);

$id_compra=$_SESSION["id"].rand(10,99);

$total=0;

for ($i=1; $i<10 ; $i++) 
	{
		if (isset($_SESSION["id[".$i."]"]))
			{
				$descrip= 'INSERT into descrip values(1,'.$_SESSION["id[".$i."]"].','.$id_compra.')';
				$conn->query($descrip);
				$total+=$_SESSION["precio[".$i."]"];
			}
	}

$compra= 'INSERT into compra values('.$id_compra.',curdate(),"pendiente","pendiente","pendiente",'.$total.')';
$orden= 'INSERT into orden values('.$id_compra.','.$_SESSION["id"].')';

$conn->query($compra); 
$conn->query($orden);

for ($i=1; $i<10 ; $i++) 
	{
		if (isset($_SESSION["nombre[".$i."]"]))
			{
				unset($_SESSION["id[".$i."]"]);
				unset($_SESSION['link['.$i.']']);
				unset($_SESSION['nombre['.$i.']']);
				unset($_SESSION['precio['.$i.']']);
			}
	}

	echo "";


  ?>