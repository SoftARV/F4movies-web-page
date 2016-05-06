<?php include('modules/modules.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>carrito</title>
	<?php echo Head("shopping car"); ?>
	<link rel="stylesheet" href="css/style-carrito.css">
</head>
<body>
	<button type="button" class="btn btn-inverted navbar-btn launch-modal" data-modal-id="modal-car">Iniciar Sesion</button>
	
	<!-- modal shopping cart -->
	<div class="modal fade" id="modal-car" tabindex="-1" role="dialog" aria-labelledby="modal-cart-label" aria-hidden="true">
       	<div class="modal-dialog">
        	<div class="modal-content">

        		<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">
        				<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        			</button>
        			<h3 class="modal-title" id="modal-login-label">Carrito de Compra</h3>
        		</div>

        		<div class="modal-body">
	                <ul id="livecar">
	                	<li>
	                		<div class="row">
	                			<div class="col-md-2 poster-movie">
	                				<img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" width="60" alt="">
	                			</div>
	                			<div class="col-md-8 description-movie">
	                				<h2>Titulo Pelicula</h2>
	                				<p>Precio...</p>
	                			</div>
	                			<div class="col-md-2 remove-movie">
	                				<a href=""><img src="images/delete_sign.png" alt=""></a>
	                			</div>
	                		</div>
	                	</li>
	                </ul>
        		</div>

        		<div class="modal-footer">
        			<button type="button" class="btn btn-primary checkout">Finalizar Compra</button>
        		</div>

        	</div>
       	</div>
    </div>
	<?php echo imports(); ?>
</body>
</html>