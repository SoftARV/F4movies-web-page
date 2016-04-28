<?php
function Head($Titulo){
	return '<meta charset="UTF-8">
			<title>'.$Titulo.'</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
			<link rel="stylesheet" type="text/css" href="css/style-main.css">
			<link rel="stylesheet" type="text/css" href="css/style-index.css">
			<link rel="stylesheet" type="text/css" href="css/style-login.css">';
}	

function Menu(){
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
	                    <a href="#">Inicio</a>
	                </li>
	                <li>
	                    <a href="#">Peliculas</a>
	                </li>
	                <li>
	                    <a href="#">Contactanos</a>
	                </li>
	            </ul>
	            <ul class="nav navbar-nav navbar-right">
	            	<button type="button" class="btn btn-inverted navbar-btn launch-modal" data-modal-id="modal-login">Iniciar Sesion</button>
	            </ul>
	        </div>
	        <!-- /.navbar-collapse -->
	    </div>
	    <!-- /.container -->
	</nav>

	
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
		                <li><a href="#">Peliculas</a></li>
		                <li><a href="#">Contactanos</a></li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
		            	<button type="button" class="btn btn-inverted navbar-btn launch-modal" data-modal-id="modal-login">Iniciar Sesion</button>
		            </ul>
		        </div>
		    </div>
		</nav>';
	}
	}

function Footer(){
	return '<div class="container">
			<div class="col-md-1 col-lg-2"><a href="#">Vuelta al Inicio</a><p class></p></div>
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
    <script type="text/javascript" src="js/scripts.js"></script>';
}

function LogOut(){
	session_unset();
	session_destroy();
	header("Location: index.php");
}

	function conexion() {	
		$server = "localhost";
		$username = "root";
		$password = "";
		$database= "venta";


		$conn = new mysqli($server, $username, $password,$database);

		if ($conn->connect_error) {
    		die("Falla: " . $conn->connect_error);
		}
	}


?>