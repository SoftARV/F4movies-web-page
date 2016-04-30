<?php 
		include("modules/Modules.php");
		//include("modules/Peliculas.php");
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo Head('Peliculas'); ?>
			<link rel="stylesheet" type="text/css" href="css/style-peliculas.css">
</head>
<body>
<div class="container">
	<?php 
		echo Menu();
	?>

	<div class="row">
		<div class="col-lg-9 col-lg-offset-2">
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buscar<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">Todos</a></li>
						<li><a href="#">Genero</a></li>
						<li><a href="#">Otros</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<input type="text" class="form-control" aria-label="..." id="search">
				<div id="livesearch"></div>
				<div class="input-group-btn">
					<button type="button" class="btn btn-default" aria-label="Grid View">
						<span class="glyphicon glyphicon glyphicon-th" id="grid-view" aria-hidden="true"></span>
					</button>

					<button type="button" class="btn btn-default" aria-label="List View">
						<span class="glyphicon glyphicon glyphicon-th-list" id="list-view" aria-hidden="true"></span>
					</button>
				</div>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->		
	</div>

	<div class="row">			
		<div class="col-lg-2">
			<div>
				<div class="list-group">
					  <a href="#" class="list-group-item disabled">Categorias</a>
					  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item">Morbi leo risus</a>
					  <a href="#" class="list-group-item disabled">Genero</a>
					  <a href="#" class="list-group-item">Vestibulum at eros</a>
				</div>
			</div>
		</div>
		
		<div class="col-lg-9" style="color: white;">
			
			<div class="movie col-md-4">
				<div class="poster">
					<a href=""><img class="poster" src="images/Default.jpg" alt="Poster"></a>
				</div>
				<div class="description">
					<h3 class="media-heading movie-title">Movie Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit aliquam, illum fugit magnam ea. Odio quia esse, tenetur excepturi quisquam amet repellendus adipisci cumque facilis, voluptas ratione, omnis perferendis tempore.</p>
				</div>
			</div>
			
			<div class="movie col-md-4">
				<div class="poster">
					<a href=""><img class="poster" src="images/Default.jpg" alt="Poster"></a>
				</div>
				<div class="description">
					<h3 class="media-heading movie-title">Movie Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit aliquam, illum fugit magnam ea. Odio quia esse, tenetur excepturi quisquam amet repellendus adipisci cumque facilis, voluptas ratione, omnis perferendis tempore.</p>
				</div>
			</div>

			<div class="movie col-md-4">
				<div class="poster">
					<a href=""><img class="poster" src="images/Default.jpg" alt="Poster"></a>
				</div>
				<div class="description">
					<h3 class="media-heading movie-title">Movie Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit aliquam, illum fugit magnam ea. Odio quia esse, tenetur excepturi quisquam amet repellendus adipisci cumque facilis, voluptas ratione, omnis perferendis tempore.</p>
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
<script type="text/javascript" src="livesearch.js"></script>
<script type="text/javascript" src="js/switch_view.js"></script>
</body>
</html>