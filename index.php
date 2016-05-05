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
					<form action="" class="form-horizontal search">
						<div class="form-group form-group-lg input-group">
							<input type="text" id="search" class="form-control" placeholder="Buscar Pelicula...">
							<div class="input-group-btn">
								<button class="btn btn-lg search-btn"><span class="glyphicon glyphicon-search"></span></button>
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

	</article>

	<footer>
		<?php echo Footer(); ?>
	</footer>

	<?php echo imports(); ?>
	<script type="text/javascript" src="js/livesearch.js"></script>
</body>
</html>	