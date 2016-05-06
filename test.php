<?php 
session_start();


for ($i=1; $i<10 ; $i++) 
	{
		if (isset($_SESSION["link[".$i."]"]))
			{
				unset($_SESSION["nombre[".$i."]"]);
				 unset($_SESSION["link[".$i."]"]);
				 unset($_SESSION["precio[".$i."]"]);

				
			}
	} 


 ?>

