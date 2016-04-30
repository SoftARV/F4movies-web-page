<?php 
		include("modules/modules.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo Head("F4movies"); ?>
	<link rel="stylesheet" type="text/css" href="owlcarousel/assets/owl.carousel.css">
</head>
<body>
	<?php 
	echo Menu(); 
	?>	
	<article>

		<div class="container description">
		<div class="row">
		<div class="col-lg-4 col-lg-offset-4" >
		<?php 
		echo login(); 
		echo registro(); 
		?>
		</div>
		
			<div class="row">
				<div class="col-md-8 search-bar">
					<h1 class="title">Bienvenido a F4movies</h1>
					<form action="" class="form-horizontal">
						<div class="form-group form-group-lg input-group">
							<input type="text" class="form-control" placeholder="Buscar Pelicula...">
							<div class="input-group-btn">
								<button class="btn btn-lg"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4 text-center">
					<img src="images/F4movies-navlogo.png" alt="logo" class="logo">
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
				
					<div class="owl-carousel">
						<div><img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" alt=""></div>
						<div><img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" alt=""></div>
						<div><img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" alt=""></div>
						<div><img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" alt=""></div>
						<div><img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" alt=""></div>
						<div><img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" alt=""></div>
						<div><img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" alt=""></div>
						<div><img src="http://ia.media-imdb.com/images/M/MV5BMjQyMzgzNTYzNF5BMl5BanBnXkFtZTgwNjA5OTQ3ODE@._V1_UX182_CR0,0,182,268_AL_.jpg" alt=""></div>
					</div>

				</div>
			</div>

		</div>

	</article>

	<footer>
		<?php echo Footer(); ?>
	</footer>

	<?php echo imports(); ?>
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="js/carousel.js"></script>
</body>
</html>