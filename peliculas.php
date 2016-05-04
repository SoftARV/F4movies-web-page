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
<div class="container">
	<?php 
		echo Menu();
	?>
	<?php 

	?>
	<div class="row">
		<div class="col-lg-9 col-lg-offset-2 search">
			<div class="input-group">
				
				<input type="text" class="form-control" aria-label="..." id="search">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default" aria-label="Grid View">
						<span class="glyphicon glyphicon glyphicon-th" id="grid-view" aria-hidden="true"></span>
					</button>

					<button type="button" class="btn btn-default" aria-label="List View">
						<span class="glyphicon glyphicon glyphicon-th-list" id="list-view" aria-hidden="true"></span>
					</button>

					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buscar<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">Todos</a></li>
						<li><a href="#">Genero</a></li>
						<li><a href="#">Otros</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
			</div><!-- /input-group -->
			<div id="livesearch"></div>
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
		
		<div class="col-lg-10" style="color: white;">
			<?php 
				movies();
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
<script type="text/javascript" src="js/switch_view.js"></script>
</body>
</html>