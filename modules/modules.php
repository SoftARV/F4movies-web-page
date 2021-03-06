<?php
function Head($Titulo){
	return '<meta charset="UTF-8">
			<title>'.$Titulo.'</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
			<link rel="stylesheet" type="text/css" href="css/style-main.css">
			<link rel="stylesheet" type="text/css" href="css/style-index.css">
			<link rel="stylesheet" type="text/css" href="css/style-login.css">
			<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
			<link rel="stylesheet" href="css/style-carrito.css">
			';
}	

function Menu(){
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
	                				<button type="button" class="delcar" value="'.$_SESSION["id[".$i."]"].'" onclick="delCar(this)"><img src="images/delete_sign.png" alt=""></button>
	                			</div>
	                		</div>
	                	</li>
	                	';
	                	
			}

	} 

	if (!isset($_SESSION["usuario"]))	
	{
	return '<!-- Navigation -->
	<nav class="navbar navbar-inverted navbar-fixed-top" role="navigation">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#">
	                <img src="images/F4movies-logo.png" class="navlogo" alt="F4movies">
	            </a>
	        </div>
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	            <ul class="nav navbar-nav">
	                <li>
	                    <a href="index.php">Inicio</a>
	                </li>
	                <li>
	                    <a href="peliculas.php">Peliculas</a>
	                </li>
	                <li>
	                    <a href="contacto.php">Contactanos</a>
	                </li>
	            </ul>
	            <ul class="nav navbar-nav navbar-right">
	            	<button type="button" class="btn btn-inverted navbar-btn launch-modal" data-modal-id="modal-login">Iniciar Sesion</button>
					<li><a class="launch-modal" data-modal-id="modal-car"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></a></li>
	            </ul>
	        </div>
	        <!-- /.navbar-collapse -->
	    </div>
	    <!-- /.container -->
	</nav>
	
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
	                <form role="form" action="modules/login.php" method="post" class="login-form">
	                   	<div class="form-group">
	                    	<label class="sr-only" for="form-email">Correo</label>
	                    	<input type="email" name="form-correo" placeholder="Correo..." class="form-correo login-input form-control" id="form-correo" required>
	                    </div>
	                    <div class="form-group">
	                        <label class="sr-only" for="form-password">Password</label>
	                        <input type="password" name="form-password" placeholder="Contraseña..." class="form-password login-input form-control" id="form-password" required>
	                    </div>
	                    <button type="submit" class="btn login">Iniciar Sesion</button>
	                    
	                </form>

	                <form role="form" action="modules/registro.php" method="post" class="register-form hidden-item">
	                   	<div class="row">
	                   		<div class="col-sm-12">
	                   			<div class="form-group">
	                    			<label class="sr-only" for="form-cedula">Cedula</label>
	                    			<input type="number" name="form-cedula" placeholder="Cedula..." class="form-cedula login-input form-control" required>
	                    		</div>
	                    	</div>
	                   		<div class="col-sm-6">
	                   			<div class="form-group">
	                    			<label class="sr-only" for="form-name">Nombre</label>
	                    			<input type="text" name="form-name" placeholder="Nombre..." class="form-name login-input form-control" id="form-name" required>
	                    		</div>
	                    	</div>
	                    	<div class="col-sm-6">
	                    		<div class="form-group">
	                    			<label class="sr-only" for="form-lastname">Apellido</label>
	                    			<input type="text" name="form-lastname" placeholder="Apellido..." class="form-lastname login-input form-control" id="form-lastname" required>
	                    		</div>
	                   		</div>
	                   		<div class="col-sm-12">
	                   			<div class="form-group">
	                    			<label class="sr-only" for="form-dir1">Direccion Primaria</label>
	                    			<input type="text" name="form-dir1" placeholder="Direccion Primaria..." class="form-dir1 login-input form-control" id="form-dir1" required>
	                    		</div>
	                    	</div>
	                    	<div class="col-sm-12">
	                   			<div class="form-group">
	                    			<label class="sr-only" for="form-dir2">Direccion Secundaria...</label>
	                    			<input type="text" name="form-dir2" placeholder="Direccion Secundaria..." class="form-dir2 login-input form-control" id="form-dir2" required>
	                    		</div>
	                    	</div>
	                    	<div class="col-sm-12">
	                   			<div class="form-group">
	                    			<label class="sr-only" for="form-telefono">Telefono</label>
	                    			<input type="number" name="form-telefono" placeholder="Numero de Telefono..." class="form-telefono login-input form-control" id="form-telefono" required>
	                    		</div>
	                    	</div>
	                   		<div class="col-sm-12">
	                   			<div class="form-group">
	                    			<label class="sr-only" for="form-correo">Correo</label>
	                    			<input type="email" name="form-correo" placeholder="Correo..." class="form-correo login-input form-control" id="form-correo"  required>
	                    		</div>
	                    	</div>
	                   		<div class="col-sm-12">
	                    		<div class="form-group">
	                    			<label class="sr-only" for="form-username">Usuario</label>
	                    			<input type="text" name="form-username" placeholder="Usuario..." class="form-username login-input form-control" id="form-username"  required>
	                    		</div>
	                    	</div>
	                    	<div class="col-sm-6">
	                    		<div class="form-group">
	                        		<label class="sr-only" for="form-password">Contraseña</label>
	                        		<input type="password" name="form-password" placeholder="Contraseña..." class="form-password login-input form-control" id="form-password" required>
	                    		</div>
	                    	</div>
	                    	<div class="col-sm-6">
	                    		<div class="form-group">
	                    			<label class="sr-only" for="form-repassword">Repetir Contraseña</label>
	                        		<input type="password" name="form-repassword" placeholder="Repetir Contraseña..." class="form-repassword login-input form-control" id="form-repassword" required>
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
	                <ul id="addLiveCar">
	                '.$carrito.'
	                </ul>
        		</div>
        		<div class="modal-footer">
        			<button type="button" class="btn btn-primary checkout"  onclick="checkCar()">Finalizar Compra</button>
        		</div>

        	</div>
       	</div>
    </div>
	
		';
	}
	else
	{
		return '<nav class="navbar navbar-inverted navbar-fixed-top" role="navigation">
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#">
		                <img src="images/F4movies-logo.png" class="navlogo" alt="F4movies">
		            </a>
		        </div>
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav">
		                <li><a href="Index.php">Inicio</a></li>
		                <li><a href="peliculas.php">Peliculas</a></li>
		                <li><a href="contacto.php">Contactanos</a></li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
		            	<li><a href="usuario.php">'.$_SESSION["usuario"].'</a></li>
						<li><a class="launch-modal" data-modal-id="modal-car"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></a></li>
		            	<li><a href="modules/logout.php">Cerrar sesion</a></li>
		            </ul>
		        </div>
		    </div>
		</nav>
		
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
	                <ul id="addLiveCar">
	                '.$carrito.'
	                </ul>
        		</div>
        		<div class="modal-footer">
        			<button type="button" class="btn btn-primary checkout"  onclick="checkCar()">Finalizar Compra</button>
        		</div>

        	</div>
       	</div>
    </div>

		';
	}
	}

function Footer(){
	return '<div class="container">
			<div class="col-md-1 col-lg-2"><a href="#"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a><p class></p></div>
			<div class="col-md-3 col-lg-2">Desarrollado por </div>
			<div class="col-md-3 col-lg-4">Todos los derechos reservados '.date('Y').' &copy;</div>
			<div class="col-md-4 col-lg-4">Redes sociales 
				<img src="images/instagram-32.png" title="Instagram" width="32">
				<img src="images/facebook-32.png" title="Facebook" width="32">
				<img src="images/twitter-32.png" title="Twitter" width="32">
				<img src="images/youtube-32.png" title="Youtube" width="32">
			</div>
			</div>';
}

function imports() {
	return '<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="js/login_scripts.js"></script>
    <script type="text/javascript" src="js/livecar.js"></script>
    <script type="text/javascript" src="js/validaciones.js"></script>
    ';
   
}

function login(){
	if (isset($_GET["loginFailed"]))
	{
		
		if ($_GET["loginFailed"]==='true') 
		{	
		echo'
		<div class="alert alert-warning">
  		<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Error</strong> Login Fallido.
		</div>';
		}
		else
		{
		echo'
		<div class="alert alert-success">
  		<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>EXITO</strong> Login Exitoso.
		</div>';
		}
	}
	
}

function registro(){
	if (isset($_GET["regFailed"]))
	{
		if ($_GET["regFailed"]==='true') 
		{
		echo'
		<div class="alert alert-warning">
  		<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Error</strong> Registro Fallido.
		</div>';
		}
		else
		{
		echo'
		<div class="alert alert-success">
  		<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>EXITO</strong> Registro Exitoso.
		</div>';
		}

	}
	
}

	function fillCarousel() {
		$server   = "localhost";
		$username = "root";
		$password = "";
		$database = "venta";


		$conn = new mysqli($server, $username, $password,$database);
		
		$listadoPeliculas = '';

		$listadoPeliculas = 'SELECT ID_pelicula,link_imagen FROM pelicula limit 12';
		
		$result = $conn->query($listadoPeliculas);
		 while($row = $result->fetch_assoc()) 
    	{	
    		echo '	<div class="movie-carousel">
    					<a href=descripcion.php?pelicula="'.$row['ID_pelicula'].'">
    						<img class="movie-carousel-poster" src="'.$row['link_imagen'].'" alt="poster">
    					</a>
    				</div>';
    	}
	}

function contacto(){
	if (isset($_GET["conFailed"]))
	{
		if ($_GET["conFailed"]==='false') 
		{
		echo'
		<div class="alert alert-success">
  		<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Exito</strong> Enviado !
		</div>';
		}
		else
		{
		echo'
		<div class="alert alert-warning">
  		<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>EXITO</strong> Registro Exitoso.
		</div>';
		}

	}
	
}




?>