<?php 
		include("modules/modules.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo Head("F4movies"); ?>
</head>
<body>
	<?php echo Menu(); ?>
	<!-- Login screen -->
     <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
       	<div class="modal-dialog">
        	<div class="modal-content">		
        		<div class="modal-header login-head">
        			<button type="button" class="close" data-dismiss="modal">
        				<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        			</button>
        			<h3 class="modal-title" id="modal-login-label">Iniciar Sesion</h3>
        			<p>Escribe Tu nombre de usuario y contraseña...</p>
        		</div>
        		<div class="modal-header register-head hidden-item">
        			<button type="button" class="close" data-dismiss="modal">
        				<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        			</button>
        			<h3 class="modal-title" id="modal-login-label">Registrate</h3>
        			<p>Escribe Tu nombre de usuario y contraseña...</p>
        		</div>
        	<div class="modal-body">
	                <form role="form" action="login.php" method="post" class="login-form">
	                   	<div class="form-group">
	                    	<label class="sr-only" for="form-email">Correo</label>
	                    	<input type="email" name="form-email" placeholder="Correo..." class="form-correo form-control" id="form-correo">
	                    </div>
	                    <div class="form-group">
	                        <label class="sr-only" for="form-password">Password</label>
	                        <input type="password" name="form-password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
	                    </div>
	                    <button type="submit" class="btn login">Iniciar Sesion</button>

	                </form>

	                <form role="form" action="" method="post" class="register-form hidden-item">
	                   	<div class="row">
	                   		<div class="col-sm-6">
	                   			<div class="form-group">
	                    			<label class="sr-only" for="form-name">Nombre</label>
	                    			<input type="text" name="form-name" placeholder="Nombre..." class="form-username form-control" id="form-name">
	                    		</div>
	                    	</div>
	                    	<div class="col-sm-6">
	                    		<div class="form-group">
	                    			<label class="sr-only" for="form-lastname">Apellido</label>
	                    			<input type="text" name="form-lastname" placeholder="Apellido..." class="form-username form-control" id="form-lastname">
	                    		</div>
	                   		</div>
	                   		<div class="col-sm-12">
	                   			<div class="form-group">
	                    			<label class="sr-only" for="form-email">Correo</label>
	                    			<input type="email" name="form-email" placeholder="Correo..." class="form-username form-control" id="form-correo">
	                    		</div>
	                    	</div>
	                   		<div class="col-sm-12">
	                    		<div class="form-group">
	                    			<label class="sr-only" for="form-username">Usuario</label>
	                    			<input type="text" name="form-username" placeholder="Usuario..." class="form-username form-control" id="form-username">
	                    		</div>
	                    	</div>
	                    	<div class="col-sm-6">
	                    		<div class="form-group">
	                        		<label class="sr-only" for="form-password">Contraseña</label>
	                        		<input type="password" name="form-password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
	                    		</div>
	                    	</div>
	                    	<div class="col-sm-6">
	                    		<div class="form-group">
	                    			<label class="sr-only" for="form-repassword">Repetir Contraseña</label>
	                        		<input type="password" name="form-repassword" placeholder="Repetir Contraseña..." class="form-repassword form-control" id="form-repassword">
	                        	</div>
	                        </div>
	                    	
						</div>
						<button type="submit" class="btn register">Registrarse</button>
	                </form>

        		</div>
        		<div class="modal-header register-btn">
	                <p>No Tienes Una cuenta? Registrate</p>
	                <button type="submit" class="btn register" id="register-switch">Registrarse</button>
	            </div>
	            <div class="modal-header login-btn hidden-item">
	                <p>Ya Tienes Una cuenta? Inicia Sesion</p>
	                <button type="submit" class="btn login" id="login-switch">Iniciar Sesion</button>
	            </div>
        	</div>
       	</div>
    </div>
	
	<article>
		<div id="carousel" class="carousel slide" data-ride="carousel">
		  	<!-- Indicators -->
		  	<ol class="carousel-indicators">
		    	<li data-target="#carousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#carousel" data-slide-to="1"></li>
		    	<li data-target="#carousel" data-slide-to="2"></li>
		  	</ol>

		  	<!-- Wrapper for slides -->
		  	<div class="carousel-inner" role="listbox">
		    	<div class="item active">
		      		<img src="images/Star-Wars-The-Force-Awakens-Official-Poster-header.jpg" class="img-responsive" alt="Pelicula 1">
		      		<div class="carousel-caption">
		        		<h3>Star Wars: The Force Awakens</h3>
		      		</div>
		    	</div>
		    	<div class="item">
		      		<img src="images/deadpool_banner.jpg" class="img-responsive" alt="Pelicula 2">
		      		<div class="carousel-caption">
		        		<h3>Deadpool</h3>
		      		</div>
		    	</div>
		    	<div class="item">
		      		<img src="images/alice_through_the_looking_glass_banner.jpg" class="img-responsive" alt="Pelicula 3">
		      		<div class="carousel-caption">
		        		<h3>Alice Through the Looking Glass</h3>
		      		</div>
		    	</div>
		  	</div>

		  	<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		</div>
		
		<div class="container description">
			<div class="row">
				<div class="col-sm-8">
					<h1 id="title">Bienvenido a F4movies</h1>
					<h3 id="text">Tu Pagina web para compra y envío de películas a  donde quieras cuando quieras</h3>
				</div>
				<div class="col-sm-4 text-center">
					<img src="images/F4movies-navlogo.png" alt="logo" class="logo">
				</div>
			</div>
		</div>

		<div class="container-fluid description2">
			<div class="row">
				<div class="col-sm-4">
					
				</div>
				<div class="col-sm-8">
					<h1 id="title"></h1>
					<h3 id="text">Tu Pagina web para compra y envío de películas a  donde quieras cuando quieras</h3>
				</div>
			</div>
		</div>

		<div class="container description">
			<div class="row">
				<div class="col-sm-8">
					<h1 id="title">Aqui peliculas mas populares</h1>
					<h3 id="text"></h3>
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