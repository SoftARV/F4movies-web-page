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
				<div class="col-md-3 poster-movie text-center">
	                <img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" width="60" alt="">
	            </div>
	            <div class="col-md-8 description-movie">
	                <h2>Titulo Pelicula</h2>
	                <h4>Precio...</h4>
	            </div>
	            <div class="col-md-1 remove-movie text-right">
	                <a href=""><img src="images/delete_sign.png" alt=""></a>
	            </div>
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