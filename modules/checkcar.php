<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";
$database= "venta";
$conn = new mysqli($server, $username, $password,$database);

$id_compra=rand(10,99);

$total=0;

$compra= 'INSERT into compra values('.$id_compra.',curdate(),"pendiente","pendiente","pendiente",'.$total.')';
$orden= 'INSERT into orden values('.$id_compra.','.$_SESSION["id"].')';

for ($i=1; $i<10 ; $i++) 
	{
		if (isset($_SESSION["nombre[".$i."]"]))
			{
				$desc= 'INSERT into desc values(1,'.$_SESSION["id[".$i."]"].','.$id_compra.')';
				if ($conn->query($desc) === TRUE) 
				{
					
				}
			}
	}

if ($conn->query($compra) === TRUE && $conn->query($orden) === TRUE) 
{
    //compra registrada
} 
else 
{
    // compra fallida
}



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