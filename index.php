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