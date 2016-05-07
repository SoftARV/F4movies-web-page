<?php 
		include("modules/modules.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo Head("F4movies"); ?>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>
<body>
	<?php 
	echo Menu(); 
	?>	
	<article>

		<div class="jumbotron description">
			<div class="row">

				<div class="col-lg-4 col-lg-offset-4" >
					<?php 
						echo login(); 
						echo registro();
					?>
				</div>
			</div>
			
			<div class="row main-search">
				<div class="col-md-8 col-sm-8">
					<h1>Bienvenido a F4movies</h1>
					<p>Tu mejor opcion para la compra de peliculas online</p>
					<form action="peliculas.php" method="GET" class="form-horizontal search">
						<div class="form-group form-group-lg input-group">
							<input type="text" id="search" class="form-control" name="keywords" placeholder="Buscar Pelicula...">
							<div class="input-group-btn">
								<button class="btn btn-lg search-btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</div>
						<div id="livesearch"></div>
					</form>
				</div>
				<div class="col-md-4 col-sm-4">
					<img class="img-responsive" src="images/F4movies-navlogo.png" alt="logo" class="logo">	
				</div>
			</div>

		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="carousel">
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
						<div class="movie-carousel"><img class="movie-carousel-poster" src="images/deadpool_poster.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>

	</article>

	<footer>
		<?php echo Footer(); ?>
	</footer>

	<?php echo imports(); ?>
	<script type="text/javascript" src="js/livesearch.js"></script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript" src="js/carousel.js"></script>
</body>
</html>	