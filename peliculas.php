<?php 
		include("modules/modules.php");
		include("modules/peliculas.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo Head('Peliculas'); ?>
	<link rel="stylesheet" type="text/css" href="css/style-peliculas.css">
</head>
<body>
<div class="container-flow">
	<?php 
		echo Menu();
	?>
	<?php 

	?>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 search">
			
			<form action="peliculas.php" method="GET" class="form-horizontal search">
				<div class="form-group form-group-lg input-group">
					<input type="text" class="form-control" name="keywords"  aria-label="Buscar Pelicula" placeholder="Buscar Pelicula..." id="search">
					<div class="input-group-btn">
						<button type="submit" class="btn btn-lg" aria-expanded="false">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</div>
				</div><!-- /input-group -->
				<div id="livesearch"></div>
			</form>
		</div><!-- /.col-lg-6 -->		
	</div>

	<div class="row">			
		
		<div class="col-md-10 col-md-offset-1 panel">
			<div class="movie-list">
			<?php
				if (isset($_GET['keywords'])) {
				 	movies($_GET['keywords']);
				 } else {
				 	movies('');
				 }
			?>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php 
		echo Footer();
	?>
</footer>
<?php echo imports(); ?>
<script type="text/javascript" src="js/livesearch.js"></script>
<script type="text/javascript" src="js/livecar.js"></script>
<script type="text/javascript" src="js/switch_view.js"></script>
</body>
</html>