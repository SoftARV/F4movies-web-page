<?php 
		include("modules/modules.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php echo Head('Checkout'); ?>
	<link rel="stylesheet" type="text/css" href="css/style-checkout.css">
</head>
<body>
	<?php echo Menu(); ?>

	<article>
		<div class="container checkout">
		<div class="checkout-panel">
			<div class="row">
				<div class="col-md-12 checkout-header">
					<h1>Terminar Compra</h1>
				</div>
			</div>
			<div class="row movie-list">
				<?php
				$carrito="";
				for ($i=1; $i<10 ; $i++) 
				{
					if (isset($_SESSION["nombre[".$i."]"]))
					{
							$carrito= $carrito.'
							<li class="delLiveCar">
	                		<div class="row">
	                			<div class="col-md-2 poster-movie">
	                				<img src="'.$_SESSION["link[".$i."]"].'" width="60" alt="">
	                					</div>
	                					<div class="col-md-8 description-movie">
	                						<h2>'.$_SESSION["nombre[".$i."]"].'</h2>
	                						<p>'.$_SESSION["precio[".$i."]"].'</p>
	                					</div>
	                					<div class="col-md-2 remove-movie">
	                							<button type="button" class="delcar" value="'.$_SESSION["id[".$i."]"].'" onclick="delCar(this)"><img src="images/delete_sign.png" 	alt=""></button>
	                					</div>
	                		</div>
	                		</li>
	                				';
	                	
						}


				}
				 echo $carrito; 
				?>
			</div>
			<div class="row text-right checkout-footer">
				<div class="col-md-8">
					<h3>Total: ....</h3>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-primary pago">Procesar Pago</button>
				</div>
			</div>
		</div>
		</div>
	</article>

	<footer>
		<?php echo Footer(); ?>
	</footer>
	<?php echo imports(); ?>
</body>
</html>